@extends('auth.master')
@section('title','密码重置')
@section('keyword','aliyun,ECS,控制面板')
@section('description','一个简单的 Aliyun ECS 控制面板')
@section('content')
    <div class="container aside-xxl">
        <a class="navbar-brand block" href="/">{{env('APP_NAME')}}</a>
        <section class="panel panel-default bg-white m-t-lg">
            <header class="panel-heading text-center">
                <strong>重置密码</strong>
            </header>

            <div class="panel-body wrapper-lg">
                <form>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input id="email" name="Email" placeholder="输入您的邮箱根据提示操作." class="form-control input-lg"
                               type="text">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Validate Code</label>
                        <input name="captcha" id="captcha" placeholder="验证码" class="form-control input-lg"
                               type="text" style="vertical-align:middle;">
                        <img id="captcha_f" title="点击刷新" src="/captcha"
                             onclick="this.src = '/captcha?r=' + Math.random();"
                             style="border-radius: 2px;cursor: pointer;position: vertical-align: middle;float: right;margin-top: -46px">
                    </div>

                </form>
                <button id="reset" type="submit" class="btn btn-primary">重置密码</button>

                <div class="line line-dashed"></div>


                <div id="msg-success" class="alert alert-info alert-dismissable" style="display: none;">
                    <button type="button" class="close" id="ok-close" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-info"></i> 成功!</h4>
                    <p id="msg-success-p"></p>
                </div>
                <div id="msg-error" class="alert alert-warning alert-dismissable" style="display: none;">
                    <button type="button" class="close" id="error-close" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> 出错了!</h4>
                    <p id="msg-error-p"></p>
                </div>

                <a href="/auth/login" class="btn btn-default btn-block">返回登陆</a>

            </div>

        </section>
    </div>
@endsection
@section('footer')
    <div class="text-center padder">
        <p>
            <small>使用本站服务请遵守当地法律<br>© <a href="/">{{env('APP_NAME')}}</a></small>
        </p>
    </div>
@endsection


@section('my-js')
    <script type="text/javascript">
        $("#header").remove();
        $("#content").addClass("m-t-lg wrapper-md animated fadeInUp");
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#ok-close").click(function () {
                $("#msg-success").hide(100);
            });
            $("#error-close").click(function () {
                $("#msg-error").hide(100);
            });
        })
    </script>
@endsection