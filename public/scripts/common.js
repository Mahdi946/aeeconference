//import { block, unblock } from "../block.js";

//const Proof = await import("../Proof.js");

const ApiUrl = "http://localhost:8081/";

export const SendDataForm = (
  btn,
  form,
  url,
  check = [],
  add = [],
  backFun = "",
  method = "POST",
  FormData = true,
  setNull = false,
  selectReset = false,
  param = {}
) => {
  let checkValues = true;
  for (let i = 0; i < check.length; i++) {
    if (!checkValue(check[i])) {
      checkValues = false;
      break;
    }
  }
  if (!checkValues) return false;

  //block();
  btn.disabled = true;
  let formData = getObjFormData(form, setNull);
  if (add.length > 0) {
    for (let i = 0; i < add.length; i++)
      formData = { ...formData, ...{ [add[i].name]: add[i].value } };
  }
  let FormDataEntry = formData

  if (FormData)
    FormDataEntry = ConvertToFormData(formData)

  Fetching(url, FormDataEntry, (data) => {
    btn.disabled = false;
    //unblock();
    if (data.status === "success" || data.status === 'true') {
      //toast("انجام شد", "success");
      if (backFun !== "") backFun(param);

      resetForm(form, selectReset);
    } else {
      // toast(data.err, "error");
    }

  }, method, FormData);
}

export const resetForm = (id, select = true) => {
  document.getElementById(id).reset();
  if (select) {
    $("select").val("").change();
  }

  $("#" + id).trigger("reset");
};

export const GetIdFromUrl = (number = 1) => {
  let params = window.location.pathname.split("/");
  return params[params.length - number];
};

export default function checkValue(element) {
  if (element.value === "") {
    alert(element.name + " is empty", "error");
    //toast(element.name + " is empty", "error");
    return false;
  }
  return true;
}

export const Fetching = async (url, data, fn, method = "POST", FormData) => {

  let header = {
    "Content-Type": "application/json",
    "X-Requested-With": "XMLHttpRequest",
  }

  if(FormData){
    delete(header['Content-Type']);
  }

  let param = {
    method,
    headers: header,

  }
  if (method !== "GET") {
    if(FormData){
      param = { ...param, ...{ body: (data) } }
    }else{
      param={...param,...{body: JSON.stringify(data)}}
    }
  }
  try {
    const response = await fetch(ApiUrl + url, param);

    const result = await response.json();
    fn(result);
  } catch (error) {
    console.error("Error:", error);
  }



  ;
};
export const FetchingFile = (url, formData, fn) => {
  //  formData.append('token',getCookie());

  $.ajax({
    type: "POST",
    cache: false,
    contentType: false,
    processData: false,
    url: ApiUrl + url,
    data: formData,
    success: function (result) {
      fn(result);
    },
  });
};
export function getObjFormData(id, setNull = false) {
  let obj = {};
  let formData = $("#" + id).serializeArray();

  let arrays = [];
  for (let i = 0; i < formData.length; i++) {
    if (setNull) {
      if (formData[i].value === "") formData[i].value = "null";
    }
    let data = { [formData[i].name]: formData[i].value };

    arrays.forEach((d, index) => {
      let values = Object.entries(data);
      let KeyVal = Object.entries(d);

      if (values[0][0] === KeyVal[0][0]) {
        let newVal = KeyVal[0][1] + "," + values[0][1];
        data[KeyVal[0][0]] = newVal;
        arrays.splice(index, 1);
      }
    });
    arrays.push(data);
    obj = { ...obj, ...data };
  }
  return obj;
}

export const ConvertToFormData = (item, multi = false) => {
  let formData = new FormData();
  let keys = Object.keys(item);
  keys.forEach((key) => {
    if (key !== "img") {
      formData.append(key, item[key]);
    } else {
      if (multi) {
        let files = item.img;
        for (let i = 0; i < files?.length; i++) {
          formData.append("img" + i, files[i]);
        }
      } else {
        formData.append("img", item.img);
      }
    }
  });
  return formData;
};

export const getCookie = (cname = "token_betonplast") => {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(";");
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
};

