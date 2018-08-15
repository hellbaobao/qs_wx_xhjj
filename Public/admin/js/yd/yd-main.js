/**
 * @name yd-login
 * @info 描述：
 * @author Hellbao <1036157505@qq.com>
 * @datetime 2018-8-7 17:15:16
 */


$(window.parent.$("#xsyd")).click(() => {
    tour.start();
})

const tour = new Tour("Demo");

tour.style({
    accentColor: "#2478b5"
});

tour.addStep("first", {
    title: "首页",
    text: "各栏目数据的实时监控",
    hook: "#tsp",
    onShow: function () {
        $('#tsp').css('border', '2px solid red').css('opacity', '0.7');
    },
    onHide: function () {
        $('#tsp').css('border', '0').css('opacity', '1');
    },
    buttons: [
        {
            text: "退出引导",
            action: "tour.stop()"
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

tour.addStep("customize-tour-container", {
    title: "首页",
    text: "这里是最新发布的内容信息，展示最新10条！",
    hook: "#nrk",
    onShow: function () {
        $('#nrk').css('border', '2px solid red').css('opacity', '0.7');
    },
    onHide: function () {
        $('#nrk').css('border', '0').css('opacity', '1');
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


tour.addStep("hooks", {
    title: "首页",
    text: "这里是最新发布的培训信息，展示最新10条！",
    hook: ".b-systitle",
    hook: "#pxk",
    onShow: function () {
        $('#pxk').css('border', '2px solid red').css('opacity', '0.7');
    },
    onHide: function () {
        $('#pxk').css('border', '0').css('opacity', '1');
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
//tour.start();