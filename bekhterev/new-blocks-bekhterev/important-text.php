<?php
//Хук enqueue_block_editor_assets добавляет скрипты и стили только в редактор администратора.
add_action('enqueue_block_editor_assets','gutenberg_blocks');
function gutenberg_blocks(){
    if(!function_exists('register_block_type')){return;}
    wp_register_script('gutenberg_blocks',VABGTDU.'/VAB_libs/VAB_functions/js/gutenberg_blocks.js',array('wp-editor','wp-blocks','wp-i18n','wp-element','wp-dom-ready','wp-edit-post','wp-components'),);
    register_block_type('vabtopic/vab-text',array('editor_script'=>'gutenberg_blocks',));
}
//скрипт:
(function(blocks,editor,i18n,element){
    var el=element.createElement,__=i18n.__,RichText=editor.RichText;
registerBlockType('vabtopic/vab-text',{
	title:'Важный текст',
	icon:{background:'#000',foreground:'#ffff00',src:'megaphone',},
	category:'VAB_category',
	attributes:{content:{type:'array',source:'children',selector:'p',},},
	edit:function(props){
        var content=props.attributes.content;
        function onChangeContent(newContent){props.setAttributes({content:newContent});}
        return el(RichText,{tagName:'p',className:props.className,onChange:onChangeContent,value:content,});
		},
	save:function(props){
        return el(RichText.Content,{tagName:'p',value:props.attributes.content,});
		},
});}(window.wp.blocks,window.wp.editor,window.wp.i18n,window.wp.element));
// для создания нашей блочной структуры и компонентов используем дополнительные объекты (window.wp.blocks, window.wp.editor, window.wp.components, window.wp.i18n , window.wp.element)
// блоки, элементы, компоненты, редакторы и компоненты интернационализации
// Вы также можете использовать дочерний source, чтобы извлечь все дочерние узлы элемента в массив и сохранить его в атрибуте.