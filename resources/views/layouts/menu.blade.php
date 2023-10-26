
@php
    $i=0;
@endphp
<!-- Divider -->
<hr class="sidebar-divider my-0">
@foreach ($menus as $m)
@php
    $i++;
    $target="#collapseTwo".$i."";
    $tarid="collapseTwo".$i."";
@endphp
<!-- Titulos -->
@if($m['parent']==0 and $m['order']==0)
@can($m['criterio'])
<hr class='sidebar-divider my-0'>
<div class='sidebar-heading'>
    {{$m['nombre']}}
</div>
@endcan
@endif 
<!-- Menus --> 
@if($m['order']==0 and $m['parent']>0)
@if ($m['ruta']<>null)
@can($m['criterio'])
<li class="nav-item">
    <a class="nav-link" href={{$m['ruta']}}>
        <i class="fas fa-fw {{$m['icono']}}"></i>
        <span>{{$m['nombre']}}</span></a>
</li>
@endcan
@else
<li class="nav-item">
    @can($m['criterio'])
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target={{$target}}
        aria-expanded="true" aria-controls={{$tarid}}>
        <i class="fas fa-fw {{$m['icono']}}"></i>
        <span>{{$m['nombre']}}</span>
    </a>
    @endcan
    <div id={{$tarid}} class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

@endif
@endif
<!-- Submenus --> 
@foreach ($menus as $s)
@can($s['criterio'])
@if ($s['order']>0 and $s['parent']==$m['id'])
        <a class="collapse-item" href={{$s['ruta']}}>>{{$s['nombre']}}</a>     
@endif
@endcan
@endforeach
@if ($m['order']==0 and $m['parent']>0 and $m['ruta']==null)
</div>
</div>
</li>
@endif
@endforeach