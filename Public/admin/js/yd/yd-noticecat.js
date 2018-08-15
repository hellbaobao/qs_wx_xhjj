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
    title: "分类管理",
    text: "您可以点击“新增”，增加新的分类，其中蓝色为父级分类，白色为子级分类，批量选择列表可以“批量删除”分类",
    hook: "#cxk",
    onShow: function () {
        $('#cxk').css('border', '2px solid red').css('opacity', '0.7');
    },
    onHide: function () {
        $('#cxk').css('border', '0').css('opacity', '1');
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

tour.addStep("hooks", {
    title: "分类管理",
    text: "这里是列表区,您可以编辑删除，点击“生成链接”，可以生成该分类微信底部菜单的跳转链接",
    hook: "#lbk",
    onShow: function () {
        $('#lbk').css('border', '2px solid red').css('opacity', '0.7');
    },
    onHide: function () {
        $('#lbk').css('border', '0').css('opacity', '1');
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