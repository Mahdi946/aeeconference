import { Fetching } from "./common.js";


const CreateEditRemoveAction = () => {
    let RemoveItems = document.querySelectorAll(".removeItem");
    for (let i = 0; i < RemoveItems.length; i++) {
        RemoveItems[i].onclick = () => ReadyForRemove(RemoveItems[i].dataset)
    }

}


const ReadyForRemove = (param) => {
    let text = `آیا از حذف ${param.title} اطمینان دارید؟`;
    if (confirm(text) == true) {
        Fetching("admin/news", {id:param.id}, (response) => {
           window.location.reload();
        }, "DELETE")
    } 
}

CreateEditRemoveAction();