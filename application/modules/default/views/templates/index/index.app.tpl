<div class="content" id="startSource" title="title of theSource" needs-header="defaultHeader" needs-footer="defaultFooter" type="blank" fullscreen="false">
	<h1>Index ({$Channel}) {$this->translate('language')}</h1>

	<div class="link" content-flow="initShow">
		<div class="label">Link to test page</div>
		<a href="{$this->subRequest(['controller' => 'index', 'action' => 'test', 'foo' => 'bar'])}#pageContent" source-name="mainSource" />  
	</div>	
	
	<div class="moduleInclude" src="{$this->subRequest(['controller' => 'index', 'action' => 'test2'])}" />

	<pre>Rendered by Smarty</pre>	
</div>