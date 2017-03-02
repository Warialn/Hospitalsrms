

临时保存待改进的样本

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
body {
margin: 0px;
padding: 0px;
}
#left {
width: 200px;
height: 9999px;
background: #f7fafc;
border-right: 1px solid #e5ebf1;
float: left;
}
#left div {
height: 40px;
color: #384463;
font-size: 14px;
line-height: 40px;
border-bottom: 1px solid #f6fafd;
border-top: 1px solid #f6fafd;
text-align: center;
}
#left div:hover {
background: #06C;
cursor:pointer;
color: #FFF
}
</style>
</head>
 
<body>
<div id="left">
  <div>导航1</div>
  <div>导航2</div>
  <div>导航3</div>
  <div>导航4</div>
  <div>导航5</div>
</div>
</body>
<script>
function js(id)
{
    return document.getElementById(id).getElementsByTagName("div");
}
for(var i=0;i<js("left").length;i++)
{
    js("left")[i].onclick=function(){
        delBackgroundColor();
        this.style.background = "#06C";
        this.style.color = "#fff";
    }
}
function delBackgroundColor()
{
    for(var i=0;i<js("left").length;i++)
    {
        js("left")[i].style.background = '';
        js("left")[i].style.color = '#384463';
    }
}
</script>
</html>