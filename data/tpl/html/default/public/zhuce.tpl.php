<?php defined('IN_IA') or exit('Access Denied');?>﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php  echo $_W['config']['siteinfo']['title'];?></title>
<meta name="keywords" content="<?php  echo $_W['config']['siteinfo']['keywords'];?>" />
<meta name="description" content="<?php  echo $_W['config']['siteinfo']['description'];?>" />
<link href="./resource/css/base.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" type="image/x-icon" href="./resource/images/favicon.ico" />
</head>
<body>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/header-gw', TEMPLATE_INCLUDEPATH)) : (include template('common/header-gw', TEMPLATE_INCLUDEPATH));?>
<div class="iiin-body">
    <div class="iiin-box">
        <div class="iasil">
            <div class="iucon">
                <div class="content">
                    <div class="newtit">
                        <h1>微信生意通·微信公众号代注册</h1>
                        <div class="sim">★★★★★ weixinsyt.com ★★★★★ </div>
                        <div class="iimg"><img src="./resource/images/weixinzhuce.jpg" width="660" height="281" alt="微信公众号代注册" title="微信公众号代注册"/></div>
                    </div>
                    <div class="somim" id="zhuce">
                        <h4>微信公众号代注册</h4>
                        <div class="content">
                            <div class="concom">
                                <p>微信生意通（www.weixinsyt.com）不只是一个微信公众号推广服务平台，微信生意通还能代替您注册微信公众号，只需要您提供相应的信息即可。
                                代注册类型如下:<br />
                                <img src="./resource/images/weixinzhuce-1.jpg" width="660" height="497" alt="微信公众号代注册" title="微信公众号代注册"/>
                                <div class="mp_kind_mod">
                                    <div class="mp_kind_mod_bd group">
                                        <dl class="mp_kind">
                                            <dt class="name"><span class="icon_mp_kind service"></span>服务号</dt>
                                            <dd>给企业和组织提供更强大的业务服务与用户管理能力，帮助企业快速实现全新的公众号服务平台。 </dd>
                                            <dd>注册费用： 200元/个（不包含腾讯认证费，腾讯认证需要300元） </dd>
                                            <dd>注册要求： 先交钱在注册。</dd>
                                            <dd>温馨提示：不过全额退款</dd>
                                        </dl>
                                        <dl class="mp_kind">
                                            <dt class="name"><span class="icon_mp_kind subscribe"></span>订阅号</dt>
                                            <dd>为媒体和个人提供一种新的信息传播方式，构建与读者之间更好的沟通与管理模式。</dd>
                                            <dd>注册费用： 49元/个（不包含腾讯认证费，腾讯认证需要300元） </dd>
                                            <dd>注册要求： 先交钱在注册。</dd>
                                            <dd>温馨提示：不过全额退款</dd>
                                        </dl>
                                        <dl class="mp_kind">
                                            <dt class="name"><span class="icon_mp_kind enterprise"></span>企业号</dt>
                                            <dd>为企业或组织提供移动应用入口，帮助企业建立与员工、上下游供应链及企业应用间的连接。</dd>
                                            <dd>注册费用： 200元/个（不包含腾讯认证费，腾讯认证需要300元） </dd>
                                            <dd>注册要求： 先交钱在注册。</dd>
                                            <dd>温馨提示：不过全额退款</dd>
                                        </dl>
                                    </div>
                                </div> </p>
                            </div>
                        </div>
                    </div>
                    <div class="duoshuo">
                        <!-- UY BEGIN -->
                        <div id="uyan_frame"></div>
                        <script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=1808089"></script>
                        <!-- UY END -->
                    </div>
                </div>
            </div>
        </div>
        <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('public/common', TEMPLATE_INCLUDEPATH)) : (include template('public/common', TEMPLATE_INCLUDEPATH));?>
        <div class="iasir">
            <div class="iidads160">
            </div>
            <div class="iidads160">
            </div>
        </div>
    </div>
</div>
<!--baidu button begin-->
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=1&amp;pos=right&amp;uid=742298" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
    document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<!--baidu button end-->
<script src="./resource/js/lib/jquery-1.11.1.min.js"></script>
<script src="./resource/js/scrolltopcontrol.js"></script>

<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
</body>
</html>
