@extends('layout.master')
@section('sidebar')
@parent
 <p>This is appended to the master sidebar.</p>
@endsection
@section('content')
aa
{{$author}}
@{{$author}}
{{--
each的用法
第一个参数是有数据加载的视图，第二个参数传的参数，第三个是视图中用的参数名，第四个是当参数为空时加载的视图
当$data是一个数组或者是一个集合时会迭代task.index_item,反之，则只加载task_index.item_empty
--}}
@each('task.index_item',$data,'value','task.index_item_empty')

@forelse ($data as $value)
{{$value}}
@empty
no value
@endforelse


@inject('metrics', 'App\Services\MetricsService')
<div>
    Monthly Revenue: {{ $metrics->monthlyRevenue() }}.
</div>


{{--@datetime($date) 在AppServiceProvider中注册datetime命令，使用无效--}}
@endsection




<script type="text/javascript">
var author = "@{{$author}}";//@告知blade保持后面的表达式原样输出，author = "{{$author}}"
var author1 = "{{$author}}";//author1 = "kevin" 
</script>