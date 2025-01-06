(()=>{"use strict";const e=window.wc.productEditor,t=window.React,l=window.wp.i18n,o=window.wc.blockTemplates,s=window.wp.components,n=JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":2,"name":"google-listings-and-ads/product-onboarding-prompt","title":"Product onboarding prompt","textdomain":"google-listings-and-ads","attributes":{"startUrl":{"type":"string","__experimentalRole":"content"}},"supports":{"html":false,"inserter":false,"lock":false,"__experimentalToolbar":false}}'),a=JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":2,"name":"google-listings-and-ads/product-channel-visibility","title":"Product channel visibility","textdomain":"google-listings-and-ads","attributes":{"property":{"type":"string","__experimentalRole":"content"},"options":{"type":"array","items":{"type":"object"},"default":[]},"valueOfSync":{"type":"string"},"valueOfDontSync":{"type":"string"},"statusOfSynced":{"type":"string"},"statusOfHasErrors":{"type":"string"}},"supports":{"html":false,"inserter":false,"lock":false,"__experimentalToolbar":false}}'),i=window.wp.date,r=window.wp.element,p=window.wc.wcSettings;async function c(e,t){const l=e.current;if(!l.validity.valid)return(0,p.isWcVersion)("9.2.0","<")?l.validationMessage:{message:l.validationMessage,context:t}}const d=JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":2,"name":"google-listings-and-ads/product-date-time-field","title":"Product date and time fields","textdomain":"google-listings-and-ads","attributes":{"label":{"type":"string"},"tooltip":{"type":"string"},"property":{"type":"string","__experimentalRole":"content"}},"supports":{"html":false,"inserter":false,"lock":false,"__experimentalToolbar":false}}'),u=JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":2,"name":"google-listings-and-ads/product-select-field","title":"Product select field","textdomain":"google-listings-and-ads","attributes":{"label":{"type":"string"},"tooltip":{"type":"string"},"property":{"type":"string","__experimentalRole":"content"},"options":{"type":"array","items":{"type":"object"},"default":[]}},"supports":{"html":false,"inserter":false,"lock":false,"__experimentalToolbar":false}}'),m=JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":2,"name":"google-listings-and-ads/product-select-with-text-field","title":"Product select with text field","textdomain":"google-listings-and-ads","attributes":{"label":{"type":"string"},"tooltip":{"type":"string"},"property":{"type":"string","__experimentalRole":"content"},"options":{"type":"array","items":{"type":"object"},"default":[]},"customInputValue":{"type":"string"}},"supports":{"html":false,"inserter":false,"lock":false,"__experimentalToolbar":false}}');function g({name:t,...l},o){(0,e.registerProductEditorBlockType)({name:t,metadata:l,settings:{edit:o}})}g(n,(function({attributes:e}){const n=(0,o.useWooBlockProps)(e);return(0,t.createElement)("div",{...n},(0,t.createElement)("div",{className:"Dz8NM01hSQyVP7lytEaS"},(0,t.createElement)("p",{className:"iKH0I_4hIpw3xXPSFYR4"},(0,l.__)("Complete setup to get your products listed on Google for free.","google-listings-and-ads")),(0,t.createElement)(s.Button,{isPrimary:!0,href:e.startUrl},(0,l.__)("Get Started","google-listings-and-ads"))))})),g(a,(function({attributes:n,context:a}){const{valueOfSync:i,valueOfDontSync:r,statusOfSynced:p,statusOfHasErrors:c}=n,d=(0,o.useWooBlockProps)(n),[u,m]=(0,e.__experimentalUseProductEntityProp)(n.property,{postType:a.postType}),{is_visible:g,sync_status:y,issues:f}=u,b=g?u.channel_visibility:r;let _=null;y===c?_=(0,l.__)("Issues detected","google-listings-and-ads"):y&&(_=y.replace("-"," "));const h=g?"":(0,l.__)("This product cannot be shown on any channel because it is hidden from your store catalog. To enable this option, please change this product to be shown in the product catalog, and save the changes.","google-listings-and-ads"),x=g&&null!==_&&b===i&&y!==p,E=f.length>0;return(0,t.createElement)("div",{...d},(0,t.createElement)(s.SelectControl,{disabled:!g,options:n.options,value:b,onChange:e=>{m({...u,channel_visibility:e})},help:h}),x&&(0,t.createElement)(s.Notice,{className:"xrM9YQcns2lLIJoZocoC",status:E?"warning":"info",isDismissible:!1},(0,t.createElement)("section",null,(0,t.createElement)("h2",null,(0,l.__)("Google sync status","google-listings-and-ads")),(0,t.createElement)("p",{className:"FNzfRIMkTNDr5hdJSQJS"},_)),E&&(0,t.createElement)("section",null,(0,t.createElement)("h2",null,(0,l.__)("Issues","google-listings-and-ads")),(0,t.createElement)("ul",null,f.map(((e,l)=>(0,t.createElement)("li",{key:l},e)))))))})),g(d,(function({attributes:l,context:n,clientId:a}){const{property:p}=l,d=(0,o.useWooBlockProps)(l),[u,m]=(0,e.__experimentalUseProductEntityProp)(p,{postType:n.postType,fallbackValue:""}),g=(0,r.useRef)(null),y=(0,r.useRef)(null),[f,b]=(0,r.useState)((()=>u?(0,i.date)("Y-m-d",u):"")),[_,h]=(0,r.useState)((()=>u?(0,i.date)("H:i",u):"")),x=(e,t)=>{let l="";if(e){const o=`${e}T${t||"00:00:00"}`,s=(0,i.getDate)(o);l=(0,i.date)("c",s,"UTC")}b(e),h(t),u!==l&&m(l)},E=(0,e.useValidation)(`${p}-date`,(()=>c(g,a))),w=(0,e.useValidation)(`${p}-time`,(()=>c(y,a)));return(0,t.createElement)("div",{...d},(0,t.createElement)(s.Flex,{align:"flex-start"},(0,t.createElement)(s.FlexBlock,null,(0,t.createElement)(e.__experimentalTextControl,{ref:g,type:"date",pattern:"\\d{4}-\\d{2}-\\d{2}",label:l.label,tooltip:l.tooltip,value:f,error:E.error,onChange:e=>x(e,_),onBlur:E.validate})),(0,t.createElement)(s.FlexBlock,null,(0,t.createElement)(e.__experimentalTextControl,{className:"p9THnpoXkzl3X4b4PYpg",label:" ",tooltip:"‎ ",ref:y,type:"time",pattern:"[0-9]{2}:[0-9]{2}",value:_,error:w.error,onChange:e=>x(f,e),onBlur:w.validate}))))})),g(u,(function({attributes:l,context:n}){const a=(0,o.useWooBlockProps)(l),[i,r]=(0,e.__experimentalUseProductEntityProp)(l.property,{postType:n.postType});return(0,t.createElement)("div",{...a},(0,t.createElement)(s.SelectControl,{label:(0,t.createElement)(e.__experimentalLabel,{label:l.label,tooltip:l.tooltip}),options:l.options,value:i,onChange:r}))})),g(m,(function({attributes:l,context:n}){const{options:a,customInputValue:i}=l,p=(0,o.useWooBlockProps)(l),[c,d]=(0,e.__experimentalUseProductEntityProp)(l.property,{postType:n.postType,fallbackValue:""}),[u,m]=(0,r.useState)((()=>{var e;const t=null!=c?c:"",l=a.find((e=>e.value===t));return null!==(e=l?.value)&&void 0!==e?e:i})),g=u===i,[y,f]=(0,r.useState)(g?c:"");return(0,t.createElement)("div",{...p},(0,t.createElement)(s.SelectControl,{label:(0,t.createElement)(e.__experimentalLabel,{label:l.label,tooltip:l.tooltip}),options:a,value:u,onChange:e=>{m(e),d(e===i?y:e)},disabled:l.disabled}),g&&(0,t.createElement)(e.__experimentalTextControl,{type:"text",value:y,onChange:e=>{f(e),d(e)},disabled:l.disabled}))}))})();