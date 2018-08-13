/**
 * @name yd-login
 * @info 描述：
 * @author Hellbao <1036157505@qq.com>
 * @datetime 2018-8-7 17:15:16
 */


$("#demo").click(() => {
    tour.start();
})

const tour = new Tour("Demo");

tour.style({
    accentColor: "#2478b5"
});

tour.addStep("first", {
    title: "欢迎",
    text: "您好！欢迎使用《延庆生态农业循环经济科普基地-微信管理平台》，请进入引导!",
    hook: "#demo",
    onShow: function () {
        // Function
    },
    buttons: [
        {
            text: "退出引导",
            action: "tour.stop()"
        },
        {
            text: "开始引导",
            action: "tour.next()"
        }
    ],
    links: [
        {
            text: "",
            href: "#"
        }
    ]
});

tour.addStep("customize-tour-container", {
    title: "管理员登录",
    text: "第一步：输入用户名!",
    hook: "#loginUser",
    onShow: function () {

    },
    buttons: [
        {
            text: "上一步",
            action: "tour.previous()"
        },
        {
            text: "下一步",
            action: "tour.next()"
        },
    ],
    links: [
        {
            text: "",
            href: "#"
        }
    ]
});

tour.addStep("timer", {
    title: "管理员登录",
    text: "第二步：输入密码!",
    hook: "#loginPwd",
//    timer: 5000,
    onShow: function () {

    },
    buttons: [
        {
            text: "上一步",
            action: "tour.previous()"
        },
        {
            text: "下一步",
            action: "tour.next()"
        }
    ],
    links: [
        {
            text: "",
            href: "#"
        }
    ]
});

tour.addStep("hooks", {
    title: "管理员登录",
    text: "第三步：输入右侧图形验证码，如果提示验证码错误，可以点击图片获取新的验证码!",
    hook: "#loginYzm",
    onShow: function () {

    },
    buttons: [
        {
            text: "上一步",
            action: "tour.previous()"
        },
        {
            text: "下一步",
            action: "tour.next()"
        }
    ],
    links: [
        {
            text: "",
            href: "#"
        }
    ]
});

tour.addStep("custom-scripts", {
    title: "管理员登录",
    text: "第四步：点击登录按钮，登录成功!",
    hook: ".b-login-btn",
    onShow: function () {

    },
    onHide: function () {

    },
    buttons: [
        {
            text: "上一步",
            action: "tour.previous()"
        },
        {
            text: "下一步",
            action: "tour.next()"
        }
    ],
    links: [
        {
            text: "",
            href: "#"
        }
    ]
});

tour.addStep("documentation", {
    title: "找回密码",
    text: '如果您忘记密码，还可以点击"忘记密码"通过电子邮箱找回密码!',
    hook: "#findPwdBtn",
    onShow: function () {
//        tour.setScroll(false);
//        $("html, body").animate({
//            scrollTop: 0
//        }, "slow");
    },
    onHide: function () {
//        tour.setScroll(true);
    },
    buttons: [
        {
            text: "上一步",
            action: "tour.previous()"
        },
        {
            text: "完成引导",
            action: "tour.next()"
        }
    ],
    links: [
        {
            text: "",
            href: "#"
        }
    ]
});
tour.start();