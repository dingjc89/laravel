@servers(['web'=>'dingjiacai@61.174.13.53'])

@task('deploy',['on'=>'web'])
	ls -al
@endtask

@after
	@hipchat('token', 'room', 'Envoy')
@endafter