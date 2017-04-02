// JavaScript Document

//ajax提交
function ajax(data,i,mark){
    mark = mark || '';
    $.ajax({
        url:'?p=back&c=product&m=upload'+mark,
        type:'post',
        data:data,
        processData:false,
        contentType:false,
        success:function(data){
            eval('var data = '+data);
            if(data.error === 1){
                $('.file-detail').eq(i).text('100%');
                $('.upload-info').eq(i).text(data.msg);
            }
            if(data.error === 0){
                $('.upload-info').eq(i).text(data.msg);
                $('#nav-file div.file-detail').eq(i).css('background','red');
            }
        }
    });
}

//导航菜单
function navList() {
    var oH = $('#nav_h4');
    oH.click(function(){
        $('#d_hidden').slideToggle(500);
    });
}

/****表格隔行高亮显示*****/
window.onload=function(){

    navList();
    var oUpload = $('#info-form').find('.upload-btn'),
        oFile1 = $('#file1'),
        oFile2 = $('#file2'),
        oButOne = $('#but-one'),
        oButTwo = $('#but-two'),
        oCon = $('#container'),
        oNav = $('#nav-file'),
        oClose = $('#close'),
        myArr = [],
        oPage = $('#page').find('a');

    oTable=document.getElementById("tab");//找表格
	aTr=document.getElementsByTagName("tr");//找所有的行
	for(i=0;i<aTr.length;i++){
		if(i%2==0){
			aTr[i].style.background="#fff";
		}else{
			aTr[i].style.background="#ccc";	
		};
	};
    oUpload.each(function(i){
        $(this).click(function(){
            oNav.html('');
            oCon.stop().slideDown(500);
            oButTwo.attr('data-id','&id='+i);
        });
    });
    //关闭上传文件
    oClose.click(function(){
        oCon.stop().slideUp(500);
    });
    oButOne.click(function(){
        oFile1.click();
        oFile1.change(function(){
            oButTwo.removeProp('disabled');
            var str = '';
            myArr = [];
            for(var i=0;i < this.files.length;i++){
                var myJson = {};
                myJson.name = this.files[i].name;
                myJson.val = this.files[i];
                myArr.push(myJson);
                str += '<span>'+this.files[i].name+'</span><span class="upload-info"></span><div class="file-detail">0%</div>'
                oNav.html(str);
            }
        });
        oButTwo.click(function(){
            var mark = $(this).attr('data-id');
            for(var i=0;i<myArr.length;i++){
                var date = new FormData();
                date.append('file',myArr[i].val,myArr[i].name);
                ajax(date,i,mark);
            }
            myArr = [];
            this.disabled = 'disabled';
        });
    });

    //发送邮件按钮
    $('#tab').find('button.send').click(function(){
        var id = $(this).attr('data-id');
        var oFlash = $('#first-flash');
        oFlash.fadeIn(500);
        var obj = this;
        $.ajax({
            url:'?p=back&c=info&m=send&id='+id,
            type:'get',
            success:function(data){
                oFlash.fadeOut(500);
                eval('var data ='+data);
                if(data.error){
                    obj.disabled = 'disabled';
                    $(obj).html('已发送');
                }else{
                    alert('发送失败，请重新发送');
                }
            }
        });
    });

};
