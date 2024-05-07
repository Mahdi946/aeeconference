import { SendDataForm } from "./common.js";

const Button=document.querySelector("#actionBtn");
const title=document.querySelector("#title");
const category=document.querySelector("#category");

if(Button !==null){
    Button.onclick=()=>{
        SendDataForm(Button,"newsForm","admin/news",[title,category],[
            {name:"img",value:document.querySelector("#img").files[0]},
            {name:"content",value:window.editorFa[0].getData()},
            {name:"content_en",value:window.editors[0].getData()},
        ],()=>{
            window.location.reload()
            history.back();
        },"POST");
    }
}