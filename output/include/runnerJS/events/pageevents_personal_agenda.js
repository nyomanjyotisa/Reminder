
Runner.pages.PageSettings.addPageEvent('personal_agenda',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrlRepeat=Runner.getControl(pageid,'repeat');var ctrlLoopType=Runner.getControl(pageid,'loop_type');ctrlRepeat.on('change',function(e){if(this.getValue()=='0'){pageObj.toggleItem("integrated_edit_field6",false);}else{pageObj.toggleItem("integrated_edit_field6",true);}});ctrlLoopType.on('change',function(e){if(this.getValue()=='1'){pageObj.toggleItem("integrated_edit_field2",true);pageObj.toggleItem("integrated_edit_field5",true);pageObj.toggleItem("integrated_edit_field6",true);}else{pageObj.toggleItem("integrated_edit_field2",false);pageObj.toggleItem("integrated_edit_field5",false);pageObj.toggleItem("integrated_edit_field6",false);}});this.on('beforeSave',function(formObj,fieldControlsArr,pageObj){var val=$("#test").val();formObj.baseParams['test']=val;});});