/**
 * @name yd-login
 * @info 描述：
 * @author Hellbao <1036157505@qq.com>
 * @datetime 2018-8-7 17:15:16
 */


$(".b-systitle").click(() => {
    tour.start();
})

const tour = new Tour("Demo");

tour.style({
    accentColor: "#2478b5"
});

tour.addStep("first", {
    title: "欢迎",
    text: "您好！您已成功登录《延庆生态农业循环经济科普基地-微信管理平台》，快和我学习一下如何使用吧!",
    hook: ".b-systitle",
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
    title: "左侧菜单",
    text: "这里是菜单区，点击相应按钮进入模块!",
    hook: "#myName",
    onShow: function () {
        $('#main-nav').css('border', '2px solid red');
    },
    onHide: function () {
        $('#main-nav').css('border', '0');
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
    title: "左侧菜单",
    text: "点击菜单按钮，可以展开相应的子级菜单!",
    hook: "#myName",
//    timer: 5000,
    onShow: function () {
        zkTab('div1');
        $('#div1').css('border', '2px solid red');
    },
    onHide: function () {
        $('#div1').css('border', '0');
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
    title: "顶栏区",
    text: "这里是顶栏区，您可以点击系统名称进入引导，点击“用户”修改个人信息，点击“退出”退出系统",
    hook: ".b-systitle",
    onShow: function () {
        $('.navbar-collapse').css('border', '2px solid red');
    },
    onHide: function () {
        $('.navbar-collapse').css('border', '0');
    },
    buttons: [
        {
            text: "上一步",
            action: "tour.previous()"
        },
        {
            text: "完成",
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