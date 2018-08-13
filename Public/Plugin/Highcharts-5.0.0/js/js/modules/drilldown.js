/*
 Highcharts JS v5.0.0 (2016-09-29)
 Highcharts Drilldown module

 Author: Torstein Honsi
 License: www.highcharts.com/license

*/
(function(n){"object"===typeof module&&module.exports?module.exports=n:n(Highcharts)})(function(n){(function(e){function n(a,b,d){var c;b.rgba.length&&a.rgba.length?(a=a.rgba,b=b.rgba,c=1!==b[3]||1!==a[3],a=(c?"rgba(":"rgb(")+Math.round(b[0]+(a[0]-b[0])*(1-d))+","+Math.round(b[1]+(a[1]-b[1])*(1-d))+","+Math.round(b[2]+(a[2]-b[2])*(1-d))+(c?","+(b[3]+(a[3]-b[3])*(1-d)):"")+")"):a=b.input||"none";return a}var B=e.noop,C=e.color,u=e.defaultOptions,k=e.each,p=e.extend,H=e.format,w=e.pick,v=e.wrap,q=e.Chart,
t=e.seriesTypes,D=t.pie,r=t.column,E=e.Tick,x=e.fireEvent,F=e.inArray,G=1;k(["fill","stroke"],function(a){e.Fx.prototype[a+"Setter"]=function(){this.elem.attr(a,n(C(this.start),C(this.end),this.pos))}});p(u.lang,{drillUpText:"\u25c1 Back to {series.name}"});u.drilldown={animation:{duration:500},drillUpButton:{position:{align:"right",x:-10,y:10}}};e.SVGRenderer.prototype.Element.prototype.fadeIn=function(a){this.attr({opacity:.1,visibility:"inherit"}).animate({opacity:w(this.newOpacity,1)},a||{duration:250})};
q.prototype.addSeriesAsDrilldown=function(a,b){this.addSingleSeriesAsDrilldown(a,b);this.applyDrilldown()};q.prototype.addSingleSeriesAsDrilldown=function(a,b){var d=a.series,c=d.xAxis,g=d.yAxis,f,h=[],y=[],e,m,z;z={colorIndex:w(a.colorIndex,d.colorIndex)};this.drilldownLevels||(this.drilldownLevels=[]);e=d.options._levelNumber||0;(m=this.drilldownLevels[this.drilldownLevels.length-1])&&m.levelNumber!==e&&(m=void 0);b=p(p({_ddSeriesId:G++},z),b);f=F(a,d.points);k(d.chart.series,function(a){a.xAxis!==
c||a.isDrilling||(a.options._ddSeriesId=a.options._ddSeriesId||G++,a.options._colorIndex=a.userOptions._colorIndex,a.options._levelNumber=a.options._levelNumber||e,m?(h=m.levelSeries,y=m.levelSeriesOptions):(h.push(a),y.push(a.options)))});f=p({levelNumber:e,seriesOptions:d.options,levelSeriesOptions:y,levelSeries:h,shapeArgs:a.shapeArgs,bBox:a.graphic?a.graphic.getBBox():{},lowerSeriesOptions:b,pointOptions:d.options.data[f],pointIndex:f,oldExtremes:{xMin:c&&c.userMin,xMax:c&&c.userMax,yMin:g&&g.userMin,
yMax:g&&g.userMax}},z);this.drilldownLevels.push(f);f=f.lowerSeries=this.addSeries(b,!1);f.options._levelNumber=e+1;c&&(c.oldPos=c.pos,c.userMin=c.userMax=null,g.userMin=g.userMax=null);d.type===f.type&&(f.animate=f.animateDrilldown||B,f.options.animation=!0)};q.prototype.applyDrilldown=function(){var a=this.drilldownLevels,b;a&&0<a.length&&(b=a[a.length-1].levelNumber,k(this.drilldownLevels,function(a){a.levelNumber===b&&k(a.levelSeries,function(a){a.options&&a.options._levelNumber===b&&a.remove(!1)})}));
this.redraw();this.showDrillUpButton()};q.prototype.getDrilldownBackText=function(){var a=this.drilldownLevels;if(a&&0<a.length)return a=a[a.length-1],a.series=a.seriesOptions,H(this.options.lang.drillUpText,a)};q.prototype.showDrillUpButton=function(){var a=this,b=this.getDrilldownBackText(),d=a.options.drilldown.drillUpButton,c,g;this.drillUpButton?this.drillUpButton.attr({text:b}).align():(g=(c=d.theme)&&c.states,this.drillUpButton=this.renderer.button(b,null,null,function(){a.drillUp()},c,g&&
g.hover,g&&g.select).addClass("highcharts-drillup-button").attr({align:d.position.align,zIndex:7}).add().align(d.position,!1,d.relativeTo||"plotBox"))};q.prototype.drillUp=function(){for(var a=this,b=a.drilldownLevels,d=b[b.length-1].levelNumber,c=b.length,g=a.series,f,h,e,l,m=function(c){var b;k(g,function(a){a.options._ddSeriesId===c._ddSeriesId&&(b=a)});b=b||a.addSeries(c,!1);b.type===e.type&&b.animateDrillupTo&&(b.animate=b.animateDrillupTo);c===h.seriesOptions&&(l=b)};c--;)if(h=b[c],h.levelNumber===
d){b.pop();e=h.lowerSeries;if(!e.chart)for(f=g.length;f--;)if(g[f].options.id===h.lowerSeriesOptions.id&&g[f].options._levelNumber===d+1){e=g[f];break}e.xData=[];k(h.levelSeriesOptions,m);x(a,"drillup",{seriesOptions:h.seriesOptions});l.type===e.type&&(l.drilldownLevel=h,l.options.animation=a.options.drilldown.animation,e.animateDrillupFrom&&e.chart&&e.animateDrillupFrom(h));l.options._levelNumber=d;e.remove(!1);l.xAxis&&(f=h.oldExtremes,l.xAxis.setExtremes(f.xMin,f.xMax,!1),l.yAxis.setExtremes(f.yMin,
f.yMax,!1))}x(a,"drillupall");this.redraw();0===this.drilldownLevels.length?this.drillUpButton=this.drillUpButton.destroy():this.drillUpButton.attr({text:this.getDrilldownBackText()}).align();this.ddDupes.length=[]};r.prototype.supportsDrilldown=!0;r.prototype.animateDrillupTo=function(a){if(!a){var b=this,d=b.drilldownLevel;k(this.points,function(a){a.graphic&&a.graphic.hide();a.dataLabel&&a.dataLabel.hide();a.connector&&a.connector.hide()});setTimeout(function(){b.points&&k(b.points,function(a,
b){var f=b===(d&&d.pointIndex)?"show":"fadeIn",e="show"===f?!0:void 0;if(a.graphic)a.graphic[f](e);if(a.dataLabel)a.dataLabel[f](e);if(a.connector)a.connector[f](e)})},Math.max(this.chart.options.drilldown.animation.duration-50,0));this.animate=B}};r.prototype.animateDrilldown=function(a){var b=this,d=this.chart.drilldownLevels,c,g=this.chart.options.drilldown.animation,f=this.xAxis;a||(k(d,function(a){b.options._ddSeriesId===a.lowerSeriesOptions._ddSeriesId&&(c=a.shapeArgs)}),c.x+=w(f.oldPos,f.pos)-
f.pos,k(this.points,function(a){a.graphic&&a.graphic.attr(c).animate(p(a.shapeArgs,{fill:a.color||b.color}),g);a.dataLabel&&a.dataLabel.fadeIn(g)}),this.animate=null)};r.prototype.animateDrillupFrom=function(a){var b=this.chart.options.drilldown.animation,d=this.group,c=this;k(c.trackerGroups,function(a){if(c[a])c[a].on("mouseover")});delete this.group;k(this.points,function(c){var f=c.graphic,h=a.shapeArgs,k=function(){f.destroy();d&&(d=d.destroy())};f&&(delete c.graphic,b?f.animate(h,e.merge(b,
{complete:k})):(f.attr(h),k()))})};D&&p(D.prototype,{supportsDrilldown:!0,animateDrillupTo:r.prototype.animateDrillupTo,animateDrillupFrom:r.prototype.animateDrillupFrom,animateDrilldown:function(a){var b=this.chart.options.drilldown.animation,d=this.chart.drilldownLevels[this.chart.drilldownLevels.length-1].shapeArgs,c=d.start,g=(d.end-c)/this.points.length;a||(k(this.points,function(a,h){var k=a.shapeArgs;if(a.graphic)a.graphic.attr(e.merge(d,{start:c+h*g,end:c+(h+1)*g}))[b?"animate":"attr"](k,
b)}),this.animate=null)}});e.Point.prototype.doDrilldown=function(a,b,d){var c=this.series.chart,e=c.options.drilldown,f=(e.series||[]).length,h;c.ddDupes||(c.ddDupes=[]);for(;f--&&!h;)e.series[f].id===this.drilldown&&-1===F(this.drilldown,c.ddDupes)&&(h=e.series[f],c.ddDupes.push(this.drilldown));x(c,"drilldown",{point:this,seriesOptions:h,category:b,originalEvent:d,points:void 0!==b&&this.series.xAxis.getDDPoints(b).slice(0)},function(b){var c=b.point.series&&b.point.series.chart,d=b.seriesOptions;
c&&d&&(a?c.addSingleSeriesAsDrilldown(b.point,d):c.addSeriesAsDrilldown(b.point,d))})};e.Axis.prototype.drilldownCategory=function(a,b){var d,c,e=this.getDDPoints(a);for(d in e)(c=e[d])&&c.series&&c.series.visible&&c.doDrilldown&&c.doDrilldown(!0,a,b);this.chart.applyDrilldown()};e.Axis.prototype.getDDPoints=function(a){var b=[];k(this.series,function(d){var c,e=d.xData,f=d.points;for(c=0;c<e.length;c++)if(e[c]===a&&d.options.data[c].drilldown){b.push(f?f[c]:!0);break}});return b};E.prototype.drillable=
function(){var a=this.pos,b=this.label,d=this.axis,c="xAxis"===d.coll&&d.getDDPoints,e=c&&d.getDDPoints(a);c&&(b&&e.length?(b.drillable=!0,b.addClass("highcharts-drilldown-axis-label").on("click",function(b){d.drilldownCategory(a,b)})):b&&b.drillable&&(b.on("click",null),b.removeClass("highcharts-drilldown-axis-label")))};v(E.prototype,"addLabel",function(a){a.call(this);this.drillable()});v(e.Point.prototype,"init",function(a,b,d,c){var g=a.call(this,b,d,c);a=(a=b.xAxis)&&a.ticks[c];g.drilldown&&
e.addEvent(g,"click",function(a){b.xAxis&&!1===b.chart.options.drilldown.allowPointDrilldown?b.xAxis.drilldownCategory(c,a):g.doDrilldown(void 0,void 0,a)});a&&a.drillable();return g});v(e.Series.prototype,"drawDataLabels",function(a){var b=this.chart.options.drilldown.activeDataLabelStyle,d=this.chart.renderer;a.call(this);k(this.points,function(a){a.drilldown&&a.dataLabel&&("contrast"===b.color&&d.getContrast(a.color||this.color),a.dataLabel.addClass("highcharts-drilldown-data-label"))},this)});
var A,u=function(a){a.call(this);k(this.points,function(a){a.drilldown&&a.graphic&&a.graphic.addClass("highcharts-drilldown-point")})};for(A in t)t[A].prototype.supportsDrilldown&&v(t[A].prototype,"drawTracker",u)})(n)});
