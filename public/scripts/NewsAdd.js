import { SendDataForm } from "./common.js";

const Button=document.querySelector("#actionBtn");
const title=document.querySelector("#title");
const category=document.querySelector("#category");
const content=document.querySelector("#content");

if(Button !==null){
    Button.onclick=()=>{
        SendDataForm(Button,"newsForm","admin/news",[title,category,content],[],()=>{
            history.back();
        },"POST");
    }
}