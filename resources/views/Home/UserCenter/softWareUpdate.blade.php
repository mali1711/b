<!DOCTYPE html>
<html lang="en" style="font-size: 625%;">
<head>
    <meta charset="UTF-8">
    <title>探路者网络--软件发布</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
    <link rel="stylesheet" href="/Home/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Home/css/release.css">
    <link rel="stylesheet" href="/Home/css/footer.css">
    <link rel="stylesheet" href="/Home/css/header.css">
    <script src="/Home/js/include.js"></script>
</head>
<body>

@include('Home.Public.header')

<!--banner-->
@include('Home.Public.IntBanner')
<!--banner-->

<div class="content">
    <div class="container">
        <div class="top">
            修改软件资源
        </div>
        <div class="con-con">
            <div class="title">修改软件资源</div>
            <strong class="col-md-4 col-md-offset-4" style='font-weight: normal; color:red;min-height: 0;font-size: 14px; background: rgba(255,255,255,0.8)'>{{Session::get('info')}}</strong>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="list-style: none">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/DosoftWareUpdate" method="post" enctype="multipart/form-data">
                <label class="lab" style="height: 43px">
                    <div class="file-con">
                        <div class="btn">选择文件</div>
                        <input type="file" name="software">
                    </div>
                    <div class="zhu">*您可以上传小于220MB的文件</div>
                </label>
                <div class="lab">
                    <span>封面图：</span>
                    <div class="section con-right">
                        <div class="article">
                            <div class="item">
                                <img class="icon addImg" onclick="clickImg(this);" src="{{$SoftwareInfo->cover}}" />
                                <input name="cover" type="file" class="upload_input" onchange="change(this)"/>
                                <div class="preBlock">
                                    <img class="preview" alt="" src="{{$SoftwareInfo->cover}}" name="pic" width="100" height="100" />
                                </div>
                                <img class="delete" onclick="deleteImg(this)" src="/Home/images/delete.png"/>
                            </div>
                        </div>
                    </div>
                </div>
                <label class="lab">
                    <span>资源名称：</span>
                    <input type="text" name="softwarename" value="{{$SoftwareInfo->softwarename}}" class="con-right inp">
                </label>
                <label class="lab">
                    <span>资源类型：</span>
                    <select class="con-right inp" name="softwaretype">
                        @foreach($CatySoftware as $vc)
                        <option value="{{$vc->id}}" @if($vc->id == $SoftwareInfo->softwaretype) selected @endif>{{$vc->caty_name}}</option>
                        @endforeach
                    </select>
                    <input type="hidden" name="is_status" value="{{$SoftwareInfo->is_status}}">
                    <input type="hidden" name="id" value="{{$SoftwareInfo->id}}">
                </label>
                <!--<label class="lab">-->
                    <!--<span>关键词（tag）：</span>-->
                    <!--<input type="text" class="con-right inp">-->
                <!--</label>-->
                <label class="lab">
                    <span>适用平台/系统：</span>
                    <input type="text" name="platform" value="{{$SoftwareInfo->platform}}" class="con-right inp">
                </label>
                <label class="lab">
                    <span>是否免费：</span>
                    <p class="con-right inp" >
                        <input type="radio" value="1" @if($SoftwareInfo->charge == 1) checked @endif name="charge"> 是
                        <input type="radio" value="0" @if($SoftwareInfo->charge == 0) checked @endif name="charge"> 否
                    </p>
                </label>
                 <div  class="lab">
                    <span>展示效果图：</span>
                    <div class="article con-right">
                        <div class="item">
                            @if($SoftwareInfo->EffectOne != '')
                            <img class="icon addImg" src="{{$SoftwareInfo->EffectOne}}" />
                            @else
                            <img class="icon addImg" src="/Home/images/zanwu.jpg" />
                            @endif
                        </div>
                        <div class="item">
                            @if($SoftwareInfo->EffectThree != '')
                            <img class="icon addImg" src="{{$SoftwareInfo->EffectThree}}" />
                            @else
                            <img class="icon addImg" src="/Home/images/zanwu.jpg" />
                            @endif
                        </div>
                        <div class="item">
                            @if($SoftwareInfo->EffectTwo != '')
                            <img class="icon addImg" src="{{$SoftwareInfo->EffectTwo}}" />
                            @else
                            <img class="icon addImg" src="/Home/images/zanwu.jpg" />
                            @endif
                        </div>
                        <div class="item">
                            @if($SoftwareInfo->EffectFour != '')
                            <img class="icon addImg" src="{{$SoftwareInfo->EffectFour}}" />
                            @else
                            <img class="icon addImg" src="/Home/images/zanwu.jpg" />
                            @endif
                        </div>
                        <div style="clear: left;"></div>
                    </div>
                </div>
                <div  class="lab">
                    <span>更换展示图：</span>
                    <div class="article con-right">
                        <div class="item">
                            <img class="icon addImg" onclick="clickImg(this);" src="/Home/images/zanwu.jpg" />
                            <input name="EffectOne" type="file" class="upload_input" onchange="change(this)"/>
                            <div class="preBlock">
                                <img class="preview" alt="" name="pic"  width="100" height="100" />
                            </div>
                            <img class="delete" onclick="deleteImg(this)" src="/Home/images/delete.png"/>
                        </div>
                        <div class="item">
                            <img class="icon addImg" onclick="clickImg(this);" src="/Home/images/zanwu.jpg" />
                            <input name="EffectTwo" type="file" class="upload_input" onchange="change(this)"/>
                            <div class="preBlock">
                                <img class="preview" alt="" name="pic" width="100" height="100" />
                            </div>
                            <img class="delete" onclick="deleteImg(this)" src="/Home/images/delete.png"/>
                        </div>
                        <div class="item">
                            <img class="icon addImg" onclick="clickImg(this);" src="/Home/images/zanwu.jpg" />
                            <input name="EffectThree" type="file" class="upload_input" onchange="change(this)"/>
                            <div class="preBlock">
                                <img class="preview" alt="" name="pic" width="100" height="100" />
                            </div>
                            <img class="delete" onclick="deleteImg(this)" src="/Home/images/delete.png"/>
                        </div>
                        <div class="item">
                            <img class="icon addImg" onclick="clickImg(this);" src="/Home/images/zanwu.jpg" />
                            <input name="EffectFour" type="file" class="upload_input" onchange="change(this)"/>
                            <div class="preBlock">
                                <img class="preview" alt="" name="pic" width="100" height="100" />
                            </div>
                            <img class="delete" onclick="deleteImg(this)" src="/Home/images/delete.png"/>
                        </div>
                        <div style="clear: left;"></div>
                    </div>
                    <div class="zhu">（最多可上传四张截图，每张截图在200KB以内）</div>
                </div>
                {{ csrf_field() }}  
                <label class="lab">
                    <span>资源描述：</span>
                    <textarea class="con-right" name="description" rows="5">{{$SoftwareInfo->description}}</textarea>
                </label>
                <input type="submit" value="提交" class="tijiao">
            </form>
        </div>
    </div>
</div>
@include('Home.Public.footer')
<script src="/Home/js/jquery-3.2.1.min.js"></script>
<script src="{{ URL::asset('js/spark-md5.min.js') }}"></script><!--需要引入spark-md5.min.js-->
<script src="{{ URL::asset('js/aetherupload.js') }}"></script><!--需要引入aetherupload.js-->
<script src="/Home/js/bootstrap.min.js"></script>
<script src="/Home/js/registered.js"></script>
<script src="/Home/js/IntBanner.js"></script>
<script src="/Home/js/public.js"></script>
<script type="text/javascript">
    //点击
    var clickImg = function(obj){
        $(obj).parent().find('.upload_input').click();
    }
    //删除
    var deleteImg = function(obj){
        $(obj).parent().find('input').val('');
        $(obj).parent().find('img.preview').attr("src","");
        //IE9以下
        $(obj).parent().find('img.preview').css("filter","");
        $(obj).hide();
        $(obj).parent().find('.addImg').show();
    };
    //选择图片
    function change(file) {
        //预览
        var pic = $(file).parent().find(".preview");
        //添加按钮
        var addImg = $(file).parent().find(".addImg");
        //删除按钮
        var deleteImg = $(file).parent().find(".delete");

        var ext=file.value.substring(file.value.lastIndexOf(".")+1).toLowerCase();

        // gif在IE浏览器暂时无法显示
        if(ext!='png'&&ext!='jpg'&&ext!='jpeg'){
            if (ext != '') {
                alert("图片的格式必须为png或者jpg或者jpeg格式！");
            }
            return;
        }
        //判断IE版本
        var isIE = navigator.userAgent.match(/MSIE/)!= null,
                isIE6 = navigator.userAgent.match(/MSIE 6.0/)!= null;
        isIE10 = navigator.userAgent.match(/MSIE 10.0/)!= null;
        if(isIE && !isIE10) {
            file.select();
            var reallocalpath = document.selection.createRange().text;
            // IE6浏览器设置img的src为本地路径可以直接显示图片
            if (isIE6) {
                pic.attr("src",reallocalpath);
            }else{
                // 非IE6版本的IE由于安全问题直接设置img的src无法显示本地图片，但是可以通过滤镜来实现
                pic.css("filter","progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale',src=\"" + reallocalpath + "\")");
                // 设置img的src为base64编码的透明图片 取消显示浏览器默认图片
                pic.attr('src','data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==');
            }
            addImg.hide();
            deleteImg.show();
        }else {
            html5Reader(file,pic,addImg,deleteImg);
        }
    }
    //H5渲染
    function html5Reader(file,pic,addImg,deleteImg){
        var file = file.files[0];
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function(e){
            pic.attr("src",this.result);
        };
        addImg.hide();
        deleteImg.show();
    }
</script>
</body>
</html>