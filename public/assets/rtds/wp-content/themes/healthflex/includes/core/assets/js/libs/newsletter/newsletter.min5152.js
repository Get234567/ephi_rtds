!function(e){"function"==typeof define&&define.amd?define(["jquery"],e):e(jQuery)}(function(e){e.extend(e.fn,{validate:function(t){if(!this.length)return void(t&&t.debug&&window.console&&console.warn("Nothing selected, can't validate, returning nothing."));var i=e.data(this[0],"validator");return i?i:(this.attr("novalidate","novalidate"),i=new e.validator(t,this[0]),e.data(this[0],"validator",i),i.settings.onsubmit&&(this.validateDelegate(":submit","click",function(t){i.settings.submitHandler&&(i.submitButton=t.target),e(t.target).hasClass("cancel")&&(i.cancelSubmit=!0),void 0!==e(t.target).attr("formnovalidate")&&(i.cancelSubmit=!0)}),this.submit(function(t){function s(){var s,r;return i.settings.submitHandler?(i.submitButton&&(s=e("<input type='hidden'/>").attr("name",i.submitButton.name).val(e(i.submitButton).val()).appendTo(i.currentForm)),r=i.settings.submitHandler.call(i,i.currentForm,t),i.submitButton&&s.remove(),void 0!==r?r:!1):!0}return i.settings.debug&&t.preventDefault(),i.cancelSubmit?(i.cancelSubmit=!1,s()):i.form()?i.pendingRequest?(i.formSubmitted=!0,!1):s():(i.focusInvalid(),!1)})),i)},valid:function(){var t,i;return e(this[0]).is("form")?t=this.validate().form():(t=!0,i=e(this[0].form).validate(),this.each(function(){t=i.element(this)&&t})),t},removeAttrs:function(t){var i={},s=this;return e.each(t.split(/\s/),function(e,t){i[t]=s.attr(t),s.removeAttr(t)}),i},rules:function(t,i){var s,r,n,a,o,u,l=this[0];if(t)switch(s=e.data(l.form,"validator").settings,r=s.rules,n=e.validator.staticRules(l),t){case"add":e.extend(n,e.validator.normalizeRule(i)),delete n.messages,r[l.name]=n,i.messages&&(s.messages[l.name]=e.extend(s.messages[l.name],i.messages));break;case"remove":return i?(u={},e.each(i.split(/\s/),function(t,i){u[i]=n[i],delete n[i],"required"===i&&e(l).removeAttr("aria-required")}),u):(delete r[l.name],n)}return a=e.validator.normalizeRules(e.extend({},e.validator.classRules(l),e.validator.attributeRules(l),e.validator.dataRules(l),e.validator.staticRules(l)),l),a.required&&(o=a.required,delete a.required,a=e.extend({required:o},a),e(l).attr("aria-required","true")),a.remote&&(o=a.remote,delete a.remote,a=e.extend(a,{remote:o})),a}}),e.extend(e.expr[":"],{blank:function(t){return!e.trim(""+e(t).val())},filled:function(t){return!!e.trim(""+e(t).val())},unchecked:function(t){return!e(t).prop("checked")}}),e.validator=function(t,i){this.settings=e.extend(!0,{},e.validator.defaults,t),this.currentForm=i,this.init()},e.validator.format=function(t,i){return 1===arguments.length?function(){var i=e.makeArray(arguments);return i.unshift(t),e.validator.format.apply(this,i)}:(arguments.length>2&&i.constructor!==Array&&(i=e.makeArray(arguments).slice(1)),i.constructor!==Array&&(i=[i]),e.each(i,function(e,i){t=t.replace(new RegExp("\\{"+e+"\\}","g"),function(){return i})}),t)},e.extend(e.validator,{defaults:{messages:{},groups:{},rules:{},errorClass:"error",validClass:"valid",errorElement:"label",focusCleanup:!1,focusInvalid:!0,errorContainer:e([]),errorLabelContainer:e([]),onsubmit:!0,ignore:":hidden",ignoreTitle:!1,onfocusin:function(e){this.lastActive=e,this.settings.focusCleanup&&(this.settings.unhighlight&&this.settings.unhighlight.call(this,e,this.settings.errorClass,this.settings.validClass),this.hideThese(this.errorsFor(e)))},onfocusout:function(e){this.checkable(e)||!(e.name in this.submitted)&&this.optional(e)||this.element(e)},onkeyup:function(e,t){(9!==t.which||""!==this.elementValue(e))&&(e.name in this.submitted||e===this.lastElement)&&this.element(e)},onclick:function(e){e.name in this.submitted?this.element(e):e.parentNode.name in this.submitted&&this.element(e.parentNode)},highlight:function(t,i,s){"radio"===t.type?this.findByName(t.name).addClass(i).removeClass(s):e(t).addClass(i).removeClass(s)},unhighlight:function(t,i,s){"radio"===t.type?this.findByName(t.name).removeClass(i).addClass(s):e(t).removeClass(i).addClass(s)}},setDefaults:function(t){e.extend(e.validator.defaults,t)},messages:{required:"This field is required.",remote:"Please fix this field.",email:"Please enter a valid email address.",url:"Please enter a valid URL.",date:"Please enter a valid date.",dateISO:"Please enter a valid date ( ISO ).",number:"Please enter a valid number.",digits:"Please enter only digits.",creditcard:"Please enter a valid credit card number.",equalTo:"Please enter the same value again.",maxlength:e.validator.format("Please enter no more than {0} characters."),minlength:e.validator.format("Please enter at least {0} characters."),rangelength:e.validator.format("Please enter a value between {0} and {1} characters long."),range:e.validator.format("Please enter a value between {0} and {1}."),max:e.validator.format("Please enter a value less than or equal to {0}."),min:e.validator.format("Please enter a value greater than or equal to {0}.")},autoCreateRanges:!1,prototype:{init:function(){function t(t){var i=e.data(this[0].form,"validator"),s="on"+t.type.replace(/^validate/,""),r=i.settings;r[s]&&!this.is(r.ignore)&&r[s].call(i,this[0],t)}this.labelContainer=e(this.settings.errorLabelContainer),this.errorContext=this.labelContainer.length&&this.labelContainer||e(this.currentForm),this.containers=e(this.settings.errorContainer).add(this.settings.errorLabelContainer),this.submitted={},this.valueCache={},this.pendingRequest=0,this.pending={},this.invalid={},this.reset();var i,s=this.groups={};e.each(this.settings.groups,function(t,i){"string"==typeof i&&(i=i.split(/\s/)),e.each(i,function(e,i){s[i]=t})}),i=this.settings.rules,e.each(i,function(t,s){i[t]=e.validator.normalizeRule(s)}),e(this.currentForm).validateDelegate(":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'] ,[type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'], [type='radio'], [type='checkbox']","focusin focusout keyup",t).validateDelegate("select, option, [type='radio'], [type='checkbox']","click",t),this.settings.invalidHandler&&e(this.currentForm).bind("invalid-form.validate",this.settings.invalidHandler),e(this.currentForm).find("[required], [data-rule-required], .required").attr("aria-required","true")},form:function(){return this.checkForm(),e.extend(this.submitted,this.errorMap),this.invalid=e.extend({},this.errorMap),this.valid()||e(this.currentForm).triggerHandler("invalid-form",[this]),this.showErrors(),this.valid()},checkForm:function(){this.prepareForm();for(var e=0,t=this.currentElements=this.elements();t[e];e++)this.check(t[e]);return this.valid()},element:function(t){var i=this.clean(t),s=this.validationTargetFor(i),r=!0;return this.lastElement=s,void 0===s?delete this.invalid[i.name]:(this.prepareElement(s),this.currentElements=e(s),r=this.check(s)!==!1,r?delete this.invalid[s.name]:this.invalid[s.name]=!0),e(t).attr("aria-invalid",!r),this.numberOfInvalids()||(this.toHide=this.toHide.add(this.containers)),this.showErrors(),r},showErrors:function(t){if(t){e.extend(this.errorMap,t),this.errorList=[];for(var i in t)this.errorList.push({message:t[i],element:this.findByName(i)[0]});this.successList=e.grep(this.successList,function(e){return!(e.name in t)})}this.settings.showErrors?this.settings.showErrors.call(this,this.errorMap,this.errorList):this.defaultShowErrors()},resetForm:function(){e.fn.resetForm&&e(this.currentForm).resetForm(),this.submitted={},this.lastElement=null,this.prepareForm(),this.hideErrors(),this.elements().removeClass(this.settings.errorClass).removeData("previousValue").removeAttr("aria-invalid")},numberOfInvalids:function(){return this.objectLength(this.invalid)},objectLength:function(e){var t,i=0;for(t in e)i++;return i},hideErrors:function(){this.hideThese(this.toHide)},hideThese:function(e){e.not(this.containers).text(""),this.addWrapper(e).hide()},valid:function(){return 0===this.size()},size:function(){return this.errorList.length},focusInvalid:function(){if(this.settings.focusInvalid)try{e(this.findLastActive()||this.errorList.length&&this.errorList[0].element||[]).filter(":visible").focus().trigger("focusin")}catch(t){}},findLastActive:function(){var t=this.lastActive;return t&&1===e.grep(this.errorList,function(e){return e.element.name===t.name}).length&&t},elements:function(){var t=this,i={};return e(this.currentForm).find("input, select, textarea").not(":submit, :reset, :image, [disabled], [readonly]").not(this.settings.ignore).filter(function(){return!this.name&&t.settings.debug&&window.console&&console.error("%o has no name assigned",this),this.name in i||!t.objectLength(e(this).rules())?!1:(i[this.name]=!0,!0)})},clean:function(t){return e(t)[0]},errors:function(){var t=this.settings.errorClass.split(" ").join(".");return e(this.settings.errorElement+"."+t,this.errorContext)},reset:function(){this.successList=[],this.errorList=[],this.errorMap={},this.toShow=e([]),this.toHide=e([]),this.currentElements=e([])},prepareForm:function(){this.reset(),this.toHide=this.errors().add(this.containers)},prepareElement:function(e){this.reset(),this.toHide=this.errorsFor(e)},elementValue:function(t){var i,s=e(t),r=t.type;return"radio"===r||"checkbox"===r?e("input[name='"+t.name+"']:checked").val():"number"===r&&"undefined"!=typeof t.validity?t.validity.badInput?!1:s.val():(i=s.val(),"string"==typeof i?i.replace(/\r/g,""):i)},check:function(t){t=this.validationTargetFor(this.clean(t));var i,s,r,n=e(t).rules(),a=e.map(n,function(e,t){return t}).length,o=!1,u=this.elementValue(t);for(s in n){r={method:s,parameters:n[s]};try{if(i=e.validator.methods[s].call(this,u,t,r.parameters),"dependency-mismatch"===i&&1===a){o=!0;continue}if(o=!1,"pending"===i)return void(this.toHide=this.toHide.not(this.errorsFor(t)));if(!i)return this.formatAndAdd(t,r),!1}catch(l){throw this.settings.debug&&window.console&&console.log("Exception occurred when checking element "+t.id+", check the '"+r.method+"' method.",l),l}}return o?void 0:(this.objectLength(n)&&this.successList.push(t),!0)},customDataMessage:function(t,i){return e(t).data("msg"+i.charAt(0).toUpperCase()+i.substring(1).toLowerCase())||e(t).data("msg")},customMessage:function(e,t){var i=this.settings.messages[e];return i&&(i.constructor===String?i:i[t])},findDefined:function(){for(var e=0;e<arguments.length;e++)if(void 0!==arguments[e])return arguments[e];return void 0},defaultMessage:function(t,i){return this.findDefined(this.customMessage(t.name,i),this.customDataMessage(t,i),!this.settings.ignoreTitle&&t.title||void 0,e.validator.messages[i],"<strong>Warning: No message defined for "+t.name+"</strong>")},formatAndAdd:function(t,i){var s=this.defaultMessage(t,i.method),r=/\$?\{(\d+)\}/g;"function"==typeof s?s=s.call(this,i.parameters,t):r.test(s)&&(s=e.validator.format(s.replace(r,"{$1}"),i.parameters)),this.errorList.push({message:s,element:t,method:i.method}),this.errorMap[t.name]=s,this.submitted[t.name]=s},addWrapper:function(e){return this.settings.wrapper&&(e=e.add(e.parent(this.settings.wrapper))),e},defaultShowErrors:function(){var e,t,i;for(e=0;this.errorList[e];e++)i=this.errorList[e],this.settings.highlight&&this.settings.highlight.call(this,i.element,this.settings.errorClass,this.settings.validClass),this.showLabel(i.element,i.message);if(this.errorList.length&&(this.toShow=this.toShow.add(this.containers)),this.settings.success)for(e=0;this.successList[e];e++)this.showLabel(this.successList[e]);if(this.settings.unhighlight)for(e=0,t=this.validElements();t[e];e++)this.settings.unhighlight.call(this,t[e],this.settings.errorClass,this.settings.validClass);this.toHide=this.toHide.not(this.toShow),this.hideErrors(),this.addWrapper(this.toShow).show()},validElements:function(){return this.currentElements.not(this.invalidElements())},invalidElements:function(){return e(this.errorList).map(function(){return this.element})},showLabel:function(t,i){var s,r,n,a=this.errorsFor(t),o=this.idOrName(t),u=e(t).attr("aria-describedby");a.length?(a.removeClass(this.settings.validClass).addClass(this.settings.errorClass),a.html(i)):(a=e("<"+this.settings.errorElement+">").attr("id",o+"-error").addClass(this.settings.errorClass).html(i||""),s=a,this.settings.wrapper&&(s=a.hide().show().wrap("<"+this.settings.wrapper+"/>").parent()),this.labelContainer.length?this.labelContainer.append(s):this.settings.errorPlacement?this.settings.errorPlacement(s,e(t)):s.insertAfter(t),a.is("label")?a.attr("for",o):0===a.parents("label[for='"+o+"']").length&&(n=a.attr("id").replace(/(:|\.|\[|\])/g,"\\$1"),u?u.match(new RegExp("\\b"+n+"\\b"))||(u+=" "+n):u=n,e(t).attr("aria-describedby",u),r=this.groups[t.name],r&&e.each(this.groups,function(t,i){i===r&&e("[name='"+t+"']",this.currentForm).attr("aria-describedby",a.attr("id"))}))),!i&&this.settings.success&&(a.text(""),"string"==typeof this.settings.success?a.addClass(this.settings.success):this.settings.success(a,t)),this.toShow=this.toShow.add(a)},errorsFor:function(t){var i=this.idOrName(t),s=e(t).attr("aria-describedby"),r="label[for='"+i+"'], label[for='"+i+"'] *";return s&&(r=r+", #"+s.replace(/\s+/g,", #")),this.errors().filter(r)},idOrName:function(e){return this.groups[e.name]||(this.checkable(e)?e.name:e.id||e.name)},validationTargetFor:function(t){return this.checkable(t)&&(t=this.findByName(t.name)),e(t).not(this.settings.ignore)[0]},checkable:function(e){return/radio|checkbox/i.test(e.type)},findByName:function(t){return e(this.currentForm).find("[name='"+t+"']")},getLength:function(t,i){switch(i.nodeName.toLowerCase()){case"select":return e("option:selected",i).length;case"input":if(this.checkable(i))return this.findByName(i.name).filter(":checked").length}return t.length},depend:function(e,t){return this.dependTypes[typeof e]?this.dependTypes[typeof e](e,t):!0},dependTypes:{"boolean":function(e){return e},string:function(t,i){return!!e(t,i.form).length},"function":function(e,t){return e(t)}},optional:function(t){var i=this.elementValue(t);return!e.validator.methods.required.call(this,i,t)&&"dependency-mismatch"},startRequest:function(e){this.pending[e.name]||(this.pendingRequest++,this.pending[e.name]=!0)},stopRequest:function(t,i){this.pendingRequest--,this.pendingRequest<0&&(this.pendingRequest=0),delete this.pending[t.name],i&&0===this.pendingRequest&&this.formSubmitted&&this.form()?(e(this.currentForm).submit(),this.formSubmitted=!1):!i&&0===this.pendingRequest&&this.formSubmitted&&(e(this.currentForm).triggerHandler("invalid-form",[this]),this.formSubmitted=!1)},previousValue:function(t){return e.data(t,"previousValue")||e.data(t,"previousValue",{old:null,valid:!0,message:this.defaultMessage(t,"remote")})}},classRuleSettings:{required:{required:!0},email:{email:!0},url:{url:!0},date:{date:!0},dateISO:{dateISO:!0},number:{number:!0},digits:{digits:!0},creditcard:{creditcard:!0}},addClassRules:function(t,i){t.constructor===String?this.classRuleSettings[t]=i:e.extend(this.classRuleSettings,t)},classRules:function(t){var i={},s=e(t).attr("class");return s&&e.each(s.split(" "),function(){this in e.validator.classRuleSettings&&e.extend(i,e.validator.classRuleSettings[this])}),i},attributeRules:function(t){var i,s,r={},n=e(t),a=t.getAttribute("type");for(i in e.validator.methods)"required"===i?(s=t.getAttribute(i),""===s&&(s=!0),s=!!s):s=n.attr(i),/min|max/.test(i)&&(null===a||/number|range|text/.test(a))&&(s=Number(s)),s||0===s?r[i]=s:a===i&&"range"!==a&&(r[i]=!0);return r.maxlength&&/-1|2147483647|524288/.test(r.maxlength)&&delete r.maxlength,r},dataRules:function(t){var i,s,r={},n=e(t);for(i in e.validator.methods)s=n.data("rule"+i.charAt(0).toUpperCase()+i.substring(1).toLowerCase()),void 0!==s&&(r[i]=s);return r},staticRules:function(t){var i={},s=e.data(t.form,"validator");return s.settings.rules&&(i=e.validator.normalizeRule(s.settings.rules[t.name])||{}),i},normalizeRules:function(t,i){return e.each(t,function(s,r){if(r===!1)return void delete t[s];if(r.param||r.depends){var n=!0;switch(typeof r.depends){case"string":n=!!e(r.depends,i.form).length;break;case"function":n=r.depends.call(i,i)}n?t[s]=void 0!==r.param?r.param:!0:delete t[s]}}),e.each(t,function(s,r){t[s]=e.isFunction(r)?r(i):r}),e.each(["minlength","maxlength"],function(){t[this]&&(t[this]=Number(t[this]))}),e.each(["rangelength","range"],function(){var i;t[this]&&(e.isArray(t[this])?t[this]=[Number(t[this][0]),Number(t[this][1])]:"string"==typeof t[this]&&(i=t[this].replace(/[\[\]]/g,"").split(/[\s,]+/),t[this]=[Number(i[0]),Number(i[1])]))}),e.validator.autoCreateRanges&&(null!=t.min&&null!=t.max&&(t.range=[t.min,t.max],delete t.min,delete t.max),null!=t.minlength&&null!=t.maxlength&&(t.rangelength=[t.minlength,t.maxlength],delete t.minlength,delete t.maxlength)),t},normalizeRule:function(t){if("string"==typeof t){var i={};e.each(t.split(/\s/),function(){i[this]=!0}),t=i}return t},addMethod:function(t,i,s){e.validator.methods[t]=i,e.validator.messages[t]=void 0!==s?s:e.validator.messages[t],i.length<3&&e.validator.addClassRules(t,e.validator.normalizeRule(t))},methods:{required:function(t,i,s){if(!this.depend(s,i))return"dependency-mismatch";if("select"===i.nodeName.toLowerCase()){var r=e(i).val();return r&&r.length>0}return this.checkable(i)?this.getLength(t,i)>0:e.trim(t).length>0},email:function(e,t){return this.optional(t)||/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(e)},url:function(e,t){return this.optional(t)||/^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(e)},date:function(e,t){return this.optional(t)||!/Invalid|NaN/.test(new Date(e).toString())},dateISO:function(e,t){return this.optional(t)||/^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/.test(e)},number:function(e,t){return this.optional(t)||/^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(e)},digits:function(e,t){return this.optional(t)||/^\d+$/.test(e)},creditcard:function(e,t){if(this.optional(t))return"dependency-mismatch";if(/[^0-9 \-]+/.test(e))return!1;var i,s,r=0,n=0,a=!1;if(e=e.replace(/\D/g,""),e.length<13||e.length>19)return!1;for(i=e.length-1;i>=0;i--)s=e.charAt(i),n=parseInt(s,10),a&&(n*=2)>9&&(n-=9),r+=n,a=!a;return r%10===0},minlength:function(t,i,s){var r=e.isArray(t)?t.length:this.getLength(t,i);return this.optional(i)||r>=s},maxlength:function(t,i,s){var r=e.isArray(t)?t.length:this.getLength(t,i);return this.optional(i)||s>=r},rangelength:function(t,i,s){var r=e.isArray(t)?t.length:this.getLength(t,i);return this.optional(i)||r>=s[0]&&r<=s[1]},min:function(e,t,i){return this.optional(t)||e>=i},max:function(e,t,i){return this.optional(t)||i>=e},range:function(e,t,i){return this.optional(t)||e>=i[0]&&e<=i[1]},equalTo:function(t,i,s){var r=e(s);return this.settings.onfocusout&&r.unbind(".validate-equalTo").bind("blur.validate-equalTo",function(){e(i).valid()}),t===r.val()},remote:function(t,i,s){if(this.optional(i))return"dependency-mismatch";var r,n,a=this.previousValue(i);return this.settings.messages[i.name]||(this.settings.messages[i.name]={}),a.originalMessage=this.settings.messages[i.name].remote,this.settings.messages[i.name].remote=a.message,s="string"==typeof s&&{url:s}||s,a.old===t?a.valid:(a.old=t,r=this,this.startRequest(i),n={},n[i.name]=t,e.ajax(e.extend(!0,{url:s,mode:"abort",port:"validate"+i.name,dataType:"json",data:n,context:r.currentForm,success:function(s){var n,o,u,l=s===!0||"true"===s;r.settings.messages[i.name].remote=a.originalMessage,l?(u=r.formSubmitted,r.prepareElement(i),r.formSubmitted=u,r.successList.push(i),delete r.invalid[i.name],r.showErrors()):(n={},o=s||r.defaultMessage(i,"remote"),n[i.name]=a.message=e.isFunction(o)?o(t):o,r.invalid[i.name]=!0,r.showErrors(n)),a.valid=l,r.stopRequest(i,l)}},s)),"pending")}}}),e.format=function(){throw"$.format has been deprecated. Please use $.validator.format instead."};var t,i={};e.ajaxPrefilter?e.ajaxPrefilter(function(e,t,s){var r=e.port;"abort"===e.mode&&(i[r]&&i[r].abort(),i[r]=s)}):(t=e.ajax,e.ajax=function(s){var r=("mode"in s?s:e.ajaxSettings).mode,n=("port"in s?s:e.ajaxSettings).port;return"abort"===r?(i[n]&&i[n].abort(),i[n]=t.apply(this,arguments),i[n]):t.apply(this,arguments)}),e.extend(e.fn,{validateDelegate:function(t,i,s){return this.bind(i,function(i){var r=e(i.target);return r.is(t)?s.apply(r,arguments):void 0})}})}),function(e){e(function(){var t;t=e("#newsletter"),t.validate({messages:themeConfig.NEWSLETTERS&&themeConfig.NEWSLETTERS.messages||{},showErrors:function(e,t){_p.debugLog("errorMap",e,"errorList",t)},invalidHandler:function(e,t){var i;_p.debugLog(t.errorList[0].message),i=t.numberOfInvalids()},submitHandler:function(){t.find("span.fa-refresh-animate").addClass("refresh-show"),e.ajax({type:"POST",url:e("#newsletter").attr("action"),data:{action:"newsletter_form",nonce:e("#newsletter #nonce").val(),email:e("#newsletter #email").val(),firstname:e("#newsletter #firstname").val(),surname:e("#newsletter #surname").val()},dataType:"json"}).done(function(i){t.find("span.fa-refresh-animate").removeClass("refresh-show"),console.log(i),i!==!1&&"error"!==i.status?(e("#newsletterResponse").text(themeConfig.NEWSLETTERS.messages.successMessage).removeClass("hidden").removeClass("btn-danger").addClass("btn-success"),e("#newsletter #email").val("").blur()):("error"===i.status&&alert(i.error),e("#newsletterResponse").text(themeConfig.NEWSLETTERS.messages.errorMessage).removeClass("hidden").addClass("btn-danger"),e("#newsletter #email").blur())}).fail(function(e){return t.find("span.fa-refresh-animate").removeClass("refresh-show"),console.log("fail: ",e)}).always(function(e){return t.find("span.fa-refresh-animate").removeClass("refresh-show"),console.log("always: ",e)})},rules:{email:{required:!0,email:!0}}})})}(jQuery);