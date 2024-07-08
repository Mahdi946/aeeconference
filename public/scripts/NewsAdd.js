import { SendDataForm } from "./common.js";

const Button=document.querySelector("#actionBtn");
const title=document.querySelector("#title");
const category=document.querySelector("#category");
const lang=document.querySelector("#lang");

 
if(Button !==null){
    Button.onclick=()=>{
        SendDataForm(Button,"newsForm","admin/news",[category],[
            {name:"img",value:document.querySelector("#img").files[0]},
            {name:"content",value:lang.value==='fa'? window.editorFa[0].getData():window.editors[0].getData()},

        ],()=>{
            window.location.reload()
            history.back();
        },"POST");
    }
}