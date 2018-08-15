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
    title: "参观预约",
    text: "此处是个万年历，点击相应的日期可在右侧查看本日预约参观情况",
    hook: "#container",
    onShow: function () {
        $('#container').css('border', '2px solid red').css('opacity', '0.7');
    },
    onHide: function () {
        $('#container').css('border', '0').css('opacity', '1');
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
    title: "参观预约",
    text: "这里是此日预约的信息，包括联系人信息及预约人数，点击“闭馆”则此日不可预约，点击“开启”重新开启预约通道",
    hook: "#lbk",
    onShow: function () {
        $('#lbk').css('opacity', '0.7');
    },
    onHide: function () {
        $('#lbk').css('opacity', '1');
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