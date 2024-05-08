import { Fetching } from "./common.js";

let action = "add";
let id = "";
const Button = document.querySelector("#actionBtn");
const CancelButton = document.querySelector("#cancelBtn");
const Title = document.querySelector("#titleCategory");

if (Button !== null) {
    Button.onclick = () => AddOrEdit()
}

if (CancelButton !== null) {
    CancelButton.onclick = () => ResetForm()
}

const AddOrEdit = () => {
    let method = action === "add" ? "POST" : "PUT";
    let body = { title: Title.value };
    if (action === "edit") {
        if (id === "")
            return;
        body = { ...body, ...{ id } }
    }
    if (Title.value === "") {
        alert("عنوان خالی است!")
        return;
    }
    Fetching("admin/category", body, (response) => {
        GetData();
        ResetForm()
    }, method)
}

const GetData = () => {
    Fetching("admin/category/all", {}, (response) => {
        CreateList(response)
    }, "GET")
}
const CreateList = (data) => {
    const Div = document.querySelector("#result");
    let str = '';
    data.forEach(item => {
        str += `<div class="flex flex-col gap-4 p-2 rounded-md shadow-md w-[200px] bg-slate-50	">
            <div><b>${item.title}</b></div>
            <hr>
            <div class="flex flex-row justify-between px-4 ">
                <div class="cursor-pointer" > <small class="editItem" data-id="${item.id}" data-title="${item.title}">ویرایش</small> </div>
                <div><small class="text-red-300 cursor-pointer removeItem" data-id="${item.id}" data-title="${item.title}" > حذف </small></div>
            </div>
        </div>`
    });
    Div.innerHTML = str;
    CreateEditRemoveAction();
}

const ResetForm = () => {
    Title.value = "";
    action = "add";
    CancelButton.style.display="none"
}

const CreateEditRemoveAction = () => {
    let EditItems = document.querySelectorAll(".editItem");
    let RemoveItems = document.querySelectorAll(".removeItem");

    for (let i = 0; i < EditItems.length; i++) {
        EditItems[i].onclick = () => ReadyForEdit(EditItems[i].dataset)
    }

    for (let i = 0; i < RemoveItems.length; i++) {
        RemoveItems[i].onclick = () => ReadyForRemove(RemoveItems[i].dataset)
    }

}

const ReadyForEdit = (param) => {
    Title.value = param.title;
    action = "edit";
    id = param.id
    CancelButton.style.display=""

}

const ReadyForRemove = (param) => {
    let text = `آیا از حذف ${param.title} اطمینان دارید؟`;
    if (confirm(text) == true) {
        Fetching("admin/category", {id:param.id}, (response) => {
            GetData();
            ResetForm()
        }, "DELETE")
    } 
}

GetData();