"use strict";(self.webpackChunkgutenkit_blocks_addon=self.webpackChunkgutenkit_blocks_addon||[]).push([[6036],{6036:(e,o,n)=>{n.r(o),n.d(o,{default:()=>r});var l=n(7723),a=n(6087),t=n(6427),d=n(790);const r=(0,a.memo)((({attributes:e,setAttributes:o,device:n,advancedControl:a})=>{const{GkitBoxShadow:r,GkitColor:s,GkitIconPicker:i,GkitPanelBody:c,GkitResponsive:u,GkitSwitcher:g,GkitTabs:k,GkitTypography:b,GkitBackgrounGroup:v,GkitRangeUnit:h,GkitBoxControl:_,GkitBorderControl:C,GkitSelect:x,GkitBlockStylePreview:p}=window.gutenkit.components,{gkitResponsiveValue:B,useFontFamilyinBlock:j,responsiveHelper:y,boxControlUnit:m}=window.gutenkit.helpers;return j([e?.titleTypography,e?.contentTypography]),(0,d.jsx)(k,{type:"top-level",tabs:[{name:"content",title:(0,l.__)("Content","gutenkit-blocks-addon")},{name:"style",title:(0,l.__)("Style","gutenkit-blocks-addon")},{name:"advanced",title:(0,l.__)("Advanced","gutenkit-blocks-addon")}],children:j=>"content"===j.name?(0,d.jsxs)(d.Fragment,{children:[(0,d.jsx)(c,{title:(0,l.__)("Accordion","gutenkit-blocks-addon"),initialOpen:!0,children:(0,d.jsx)(p,{label:(0,l.__)("Select Style","gutenkit-blocks-addon"),value:e?.style,options:[{label:(0,l.__)("Primary","gutenkit-blocks-addon"),value:"accordion-primary",attributes:{style:"accordion-primary"}},{label:(0,l.__)("Curve Shape","gutenkit-blocks-addon"),value:"curve-shape",attributes:{style:"curve-shape"}},{label:(0,l.__)("Side Curve","gutenkit-blocks-addon"),value:"accordion-primary side-curve",attributes:{style:"accordion-primary side-curve"}},{label:(0,l.__)("Box Icon","gutenkit-blocks-addon"),value:"accordion-4",attributes:{style:"accordion-4"}},{label:(0,l.__)("Floating Style","gutenkit-blocks-addon"),value:"floating-style",attributes:{style:"floating-style"}}],onChange:e=>o({style:e})})}),(0,d.jsxs)(c,{title:(0,l.__)("Icon","gutenkit-blocks-addon"),children:[(0,d.jsx)(x,{label:"Icon Position",options:[{label:(0,l.__)("Right","gutenkit-blocks-addon"),value:"right"},{label:(0,l.__)("Left","gutenkit-blocks-addon"),value:"left"},{label:(0,l.__)("Both side","gutenkit-blocks-addon"),value:"bothside"}],value:e?.iconPosStyle,onChange:e=>o({iconPosStyle:e})}),"right"==e?.iconPosStyle&&(0,d.jsx)(g,{label:(0,l.__)("Show Loop Count","gutenkit-blocks-addon"),value:e?.intitialOpen,onChange:e=>o({displayLoopCount:e})}),("left"==e?.iconPosStyle||"bothside"==e?.iconPosStyle)&&(0,d.jsxs)(d.Fragment,{children:[(0,d.jsx)(i,{label:(0,l.__)("Left Icon Close","gutenkit-blocks-addon"),onChange:e=>o({leftIcons:e}),value:e?.leftIcons}),(0,d.jsx)(i,{label:(0,l.__)("Left Icon Active","gutenkit-blocks-addon"),onChange:e=>o({leftIconActives:e}),value:e?.leftIconActives})]}),("right"==e?.iconPosStyle||"bothside"==e?.iconPosStyle)&&(0,d.jsxs)(d.Fragment,{children:[(0,d.jsx)(i,{label:(0,l.__)("Right Icon Close","gutenkit-blocks-addon"),onChange:e=>o({rightIcons:e}),value:e?.rightIcons}),(0,d.jsx)(i,{label:(0,l.__)("Right Icon Active","gutenkit-blocks-addon"),onChange:e=>o({rightIconActives:e}),value:e?.rightIconActives})]})]})]}):"style"===j.name?(0,d.jsxs)(d.Fragment,{children:[(0,d.jsxs)(c,{title:(0,l.__)("Title","gutenkit-blocks-addon"),initialOpen:!0,children:[(0,d.jsx)(b,{label:(0,l.__)("Typography","gutenkit-blocks-addon"),onChange:e=>o({titleTypography:e}),value:e?.titleTypography}),(0,d.jsx)(k,{type:"normal",tabs:[{name:"closed-background",title:(0,l.__)("Closed","gutenkit-blocks-addon")},{name:"open-background",title:(0,l.__)("Open","gutenkit-blocks-addon")},{name:"hover-background",title:(0,l.__)("Hover","gutenkit-blocks-addon")}],children:n=>"closed-background"===n.name?(0,d.jsxs)(d.Fragment,{children:[(0,d.jsx)(s,{label:(0,l.__)("Color","gutenkit-blocks-addon"),onChange:e=>o({titleColorClose:e}),value:e?.titleColorClose}),"curve-shape"!==e?.style&&(0,d.jsx)(v,{label:(0,l.__)("Background","gutenkit-blocks-addon"),onChange:e=>o({backgroundClose:e}),value:e?.backgroundClose,exclude:{video:!0,image:!0}}),"curve-shape"===e?.style&&(0,d.jsx)(s,{label:(0,l.__)("Background Color","gutenkit-blocks-addon"),onChange:e=>o({curveFillClose:e}),value:e?.curveFillClose}),"curve-shape"===e?.style&&(0,d.jsx)(s,{label:(0,l.__)("Border Color","gutenkit-blocks-addon"),onChange:e=>o({curveStrokeClose:e}),value:e?.curveStrokeClose}),"curve-shape"!==e?.style&&(0,d.jsx)(C,{label:(0,l.__)("Border ","gutenkit-blocks-addon"),onChange:e=>o({titleBorderClose:e}),value:e?.titleBorderClose}),"curve-shape"!==e?.style&&(0,d.jsx)(_,{label:(0,l.__)("Border Radius","gutenkit-blocks-addon"),units:m,values:e?.borderRadiousClose,onChange:e=>o({borderRadiousClose:e})}),(0,d.jsx)(r,{value:e?.boxShadowClose,onChange:e=>o({boxShadowClose:e})})]}):"open-background"===n.name?(0,d.jsxs)(d.Fragment,{children:[(0,d.jsx)(s,{label:(0,l.__)("Color","gutenkit-blocks-addon"),onChange:e=>o({titleColor:e}),value:e?.titleColor}),"curve-shape"===e?.style&&(0,d.jsxs)(d.Fragment,{children:[(0,d.jsx)(s,{label:(0,l.__)("Background Color","gutenkit-blocks-addon"),onChange:e=>o({curveFillColor:e}),value:e?.curveFillColor}),(0,d.jsx)(s,{label:(0,l.__)("Border Color","gutenkit-blocks-addon"),onChange:e=>o({curveStrokeColor:e}),value:e?.curveStrokeColor})]}),"curve-shape"!==e?.style&&(0,d.jsxs)(d.Fragment,{children:[(0,d.jsx)(v,{onChange:e=>o({background:e}),value:e?.background,exclude:{video:!0,image:!0}}),(0,d.jsx)(C,{label:(0,l.__)("Border","gutenkit-blocks-addon"),onChange:e=>o({titleBorderOpen:e}),value:e?.titleBorderOpen}),(0,d.jsx)(_,{label:(0,l.__)("Border Radius","gutenkit-blocks-addon"),units:m,values:e?.borderRadiousCurveShapeOpen,onChange:e=>o({borderRadiousCurveShapeOpen:e})})]}),(0,d.jsx)(r,{value:e?.boxShadowOpen,onChange:e=>o({boxShadowOpen:e})})]}):"hover-background"===n.name?(0,d.jsxs)(d.Fragment,{children:[(0,d.jsx)(s,{label:(0,l.__)("Color","gutenkit-blocks-addon"),onChange:e=>o({titleColorHover:e}),value:e?.titleColorHover}),"curve-shape"!==e?.style&&(0,d.jsx)(v,{onChange:e=>o({backgroundHover:e}),value:e?.backgroundHover,exclude:{video:!0,image:!0}}),"curve-shape"===e?.style&&(0,d.jsx)(s,{label:(0,l.__)("Background Color","gutenkit-blocks-addon"),onChange:e=>o({curveFillHover:e}),value:e?.curveFillHover}),"curve-shape"===e?.style&&(0,d.jsx)(s,{label:(0,l.__)("Border Color","gutenkit-blocks-addon"),onChange:e=>o({curveStrokeHover:e}),value:e?.curveStrokeHover}),"curve-shape"!==e?.style&&(0,d.jsx)(C,{label:(0,l.__)("Border ","gutenkit-blocks-addon"),onChange:e=>o({titleBorderHover:e}),value:e?.titleBorderHover}),"curve-shape"!==e?.style&&(0,d.jsx)(_,{label:(0,l.__)("Border Radius","gutenkit-blocks-addon"),units:m,values:e?.borderRadiousHover,onChange:e=>o({borderRadiousHover:e})}),(0,d.jsx)(r,{value:e?.boxShadowHover,onChange:e=>o({boxShadowHover:e})})]}):void 0}),(0,d.jsx)(t.__experimentalDivider,{}),(0,d.jsx)(u,{children:(0,d.jsx)(_,{label:(0,l.__)("Padding","gutenkit-blocks-addon"),values:B(e,"titlePadding",n),onChange:e=>y("titlePadding",e,n,o)})}),(0,d.jsx)(u,{children:(0,d.jsx)(h,{label:(0,l.__)("Margin Bottom","gutenkit-blocks-addon"),value:B(e,"titleMarginBottom",n),onChange:e=>y("titleMarginBottom",e,n,o)})})]}),(0,d.jsxs)(c,{title:(0,l.__)("Content","gutenkit-blocks-addon"),children:[(0,d.jsx)(s,{label:(0,l.__)("Color","gutenkit-blocks-addon"),onChange:e=>o({contentColor:e}),value:e?.contentColor}),(0,d.jsx)(b,{label:(0,l.__)("Typography","gutenkit-blocks-addon"),onChange:e=>o({contentTypography:e}),value:e?.contentTypography}),(0,d.jsx)(v,{onChange:e=>o({contentBackground:e}),value:e?.contentBackground,exclude:{video:!0,image:!0}}),(0,d.jsx)(_,{label:(0,l.__)("Border Radius","gutenkit-blocks-addon"),units:m,values:e?.contentBorderRadious,onChange:e=>o({contentBorderRadious:e})}),(0,d.jsx)(u,{children:(0,d.jsx)(_,{label:(0,l.__)("Padding","gutenkit-blocks-addon"),values:B(e,"contentPadding",n),onChange:e=>y("contentPadding",e,n,o)})})]}),(0,d.jsxs)(c,{title:(0,l.__)("Border","gutenkit-blocks-addon"),children:[(0,d.jsx)(k,{type:"normal",tabs:[{name:"closed-background",title:"Closed"},{name:"open-background",title:(0,l.__)("Open","gutenkit-blocks-addon")}],children:n=>"closed-background"===n.name?(0,d.jsxs)(d.Fragment,{children:[(0,d.jsx)(C,{label:(0,l.__)("Border","gutenkit-blocks-addon"),onChange:e=>o({borderOpen:e}),value:e?.borderOpen}),(0,d.jsx)(_,{label:(0,l.__)("Border Radius","gutenkit-blocks-addon"),units:m,values:e?.borderRadiousOpen,onChange:e=>o({borderRadiousOpen:e})}),(0,d.jsx)(r,{value:e?.elementBoxShadowGroup,onChange:e=>o({elementBoxShadowGroup:e})})]}):"open-background"===n.name?(0,d.jsxs)(d.Fragment,{children:[(0,d.jsx)(C,{label:(0,l.__)("Border","gutenkit-blocks-addon"),onChange:e=>o({borderClosed:e}),value:e?.borderClosed}),(0,d.jsx)(_,{label:(0,l.__)("Border Radius","gutenkit-blocks-addon"),units:m,values:e?.borderRadiousClosed,onChange:e=>o({borderRadiousClosed:e})}),(0,d.jsx)(r,{value:e?.elementBoxShadowGroupClosed,onChange:e=>o({elementBoxShadowGroupClosed:e})})]}):void 0}),(0,d.jsx)(t.__experimentalDivider,{}),(0,d.jsx)(g,{label:(0,l.__)("Disable Border for last Element?","gutenkit-blocks-addon"),value:e?.lastChildBorderBottom,onChange:e=>o({lastChildBorderBottom:e})})]}),(0,d.jsxs)(c,{title:(0,l.__)("Icon","gutenkit-blocks-addon"),children:[(0,d.jsx)(k,{type:"normal",tabs:[{name:"closed-background",title:"Closed"},{name:"open-background",title:"Open"},{name:"hover-background",title:"Hover"}],children:a=>"closed-background"===a.name?(0,d.jsxs)(d.Fragment,{children:[(0,d.jsx)(u,{children:(0,d.jsx)(h,{label:(0,l.__)("Size","gutenkit-blocks-addon"),value:B(e,"iconTypographyClose",n),onChange:e=>y("iconTypographyClose",e,n,o),units:{px:{min:10,max:300,step:1}}})}),(0,d.jsx)(s,{label:(0,l.__)("Color","gutenkit-blocks-addon"),onChange:e=>o({iconColorClose:e}),value:e?.iconColorClose}),(0,d.jsx)(v,{onChange:e=>o({iconBoxBgClose:e}),value:e?.iconBoxBgClose,exclude:{video:!0,image:!0}}),"accordion-4"===e?.style&&(0,d.jsx)(v,{label:(0,l.__)("Before BG","gutenkit-blocks-addon"),onChange:e=>o({iconBoxBgBeforeClose:e}),value:e?.iconBoxBgBeforeClose,exclude:{video:!0,image:!0}}),(0,d.jsx)(C,{label:(0,l.__)("Border","gutenkit-blocks-addon"),onChange:e=>o({iconBorderClosed:e}),value:e?.iconBorderClosed})]}):"open-background"===a.name?(0,d.jsxs)(d.Fragment,{children:[(0,d.jsx)(u,{children:(0,d.jsx)(h,{label:(0,l.__)("Size","gutenkit-blocks-addon"),value:B(e,"iconTypography",n),onChange:e=>y("iconTypography",e,n,o),units:{px:{min:10,max:300,step:1}}})}),(0,d.jsx)(s,{label:(0,l.__)("Color","gutenkit-blocks-addon"),onChange:e=>o({iconColorOpen:e}),value:e?.iconColorOpen}),(0,d.jsx)(v,{onChange:e=>o({iconBoxBgOpen:e}),value:e?.iconBoxBgOpen,exclude:{video:!0,image:!0}}),"accordion-4"===e?.style&&(0,d.jsx)(v,{label:(0,l.__)("Before BG","gutenkit-blocks-addon"),onChange:e=>o({iconBoxBgBeforeOpen:e}),value:e?.iconBoxBgBeforeOpen,exclude:{video:!0,image:!0}}),(0,d.jsx)(C,{label:(0,l.__)("Border","gutenkit-blocks-addon"),onChange:e=>o({iconBorderOpen:e}),value:e?.iconBorderOpen})]}):"hover-background"===a.name?(0,d.jsxs)(d.Fragment,{children:[(0,d.jsx)(u,{children:(0,d.jsx)(h,{label:(0,l.__)("Size","gutenkit-blocks-addon"),value:B(e,"iconTypographyHover",n),onChange:e=>y("iconTypographyHover",e,n,o),units:{px:{min:10,max:300,step:1}}})}),(0,d.jsx)(s,{label:(0,l.__)("Color","gutenkit-blocks-addon"),onChange:e=>o({iconColorHover:e}),value:e?.iconColorHover}),(0,d.jsx)(v,{onChange:e=>o({iconBoxBgHover:e}),value:e?.iconBoxBgHover,exclude:{video:!0,image:!0}}),"accordion-4"===e?.style&&(0,d.jsx)(v,{label:(0,l.__)("Before BG","gutenkit-blocks-addon"),onChange:e=>o({iconBoxBgBeforeHover:e}),value:e?.iconBoxBgBeforeHover,exclude:{video:!0,image:!0}}),(0,d.jsx)(C,{label:(0,l.__)("Border","gutenkit-blocks-addon"),onChange:e=>o({iconBorderHover:e}),value:e?.iconBorderHover})]}):void 0}),(0,d.jsx)(t.__experimentalDivider,{}),(0,d.jsx)(_,{label:(0,l.__)("Border Radius","gutenkit-blocks-addon"),units:m,values:e?.iconBorderRadious,onChange:e=>o({iconBorderRadious:e})}),(0,d.jsx)(u,{children:(0,d.jsx)(_,{label:(0,l.__)("Padding","gutenkit-blocks-addon"),values:B(e,"iconPadding",n),onChange:e=>y("iconPadding",e,n,o)})}),(0,d.jsx)(u,{children:(0,d.jsx)(_,{label:(0,l.__)("Margin","gutenkit-blocks-addon"),values:B(e,"iconMargin",n),onChange:e=>y("iconMargin",e,n,o)})})]})]}):"advanced"===j.name?a:j.name})}))}}]);