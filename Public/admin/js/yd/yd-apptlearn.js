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
    title: "内容列表",
    text: "您可以点击“新增”，增加新的内容，批量选择列表可以“批量删除”内容，您可以通过分类和名称去查询想要的内容",
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
    title: "内容列表",
    text: "这里是列表区,您可以编辑，点击“发布”，用户才能看到您发布的内容",
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