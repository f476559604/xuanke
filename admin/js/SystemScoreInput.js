function $3(id) {
    return document.getElementById(id);
}
document.onkeydown = function enterToTab() {

    //case 38: objUp();break;
    //case 40: objDown();break;
    //case 37: objLeft();break;
    //case 39: objRight();break;
    var moveType = 0;

    switch (event.keyCode) {
    case 38:
        moveType = 1;
        break
    case 17: //Ctrl
    case 40:
        moveType = 2;
        break
    case 37:
        moveType = 3;
        break
    case 16: //Shift
    case 18: //Alt
    case 39:
        moveType = 4;
        break
    default:
        moveType = 0;
        break
    }
    
    
    //文本才相应移动事件
    if (event.srcElement.type == "text") {
        var name = event.srcElement.id;
        //上下移动
        if (moveType == 1 || moveType == 2) {
            moveUpdown(name, moveType);
        }
        //左右移动
        if (moveType == 3 || moveType == 4) {
            moveLeftRight(name, moveType);
        }
    }
}

//左右移动
function moveLeftRight(name, moveType) {
    //gvInfo_ctl23_TextBox1
    var mInfo;
    var oldID;
    oldID = name.substring(name.length - 1, name.length);

    var newID;
    newID = (oldID);
    if (moveType == 3) {
        newID--;
    } else {
        newID++;
    }

    if (newID <= 0) {
        newID = 5
    }
    if (newID >= 6) {
        newID = 1
    }
    var newName = name.substring(0, name.length - 1) + newID;
    var m = $3(newName);
    if (m != null) {
        m.focus();
        m.select();
    }

}

//上下移动
function moveUpdown(name, moveType) {
    var mInfo;
    mInfo = name.split("_");
    var oldID = mInfo[1];
    oldID = oldID.substring(3, oldID.length);
    var newID;
    newID = (oldID);
    if (moveType == 1) {
        newID--;
    } else {
        newID++;
    }
    var newName;

    if (newID < 10) {
        newName = mInfo[0] + "_ctl0" + newID + "_" + mInfo[2];
    } else {
        newName = mInfo[0] + "_ctl" + newID + "_" + mInfo[2];

    }
    var m = $3(newName);

    if (m == null) {

        newName = mInfo[0] + "_ctl02_" + mInfo[2];
        m = $3(newName);
    }

    if (m != null) {
        m.focus();
        m.select();
    }

}