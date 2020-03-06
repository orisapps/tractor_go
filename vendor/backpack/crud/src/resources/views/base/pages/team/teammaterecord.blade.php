@forelse ($gen as $gen)
<tr class="even pointer">
<td class="a-center ">
 <input type="checkbox" class="flat" name="table_records">
</td>
<td class=" ">{{$gen->created_at}}</td>
<td class=" ">{{$gen->fullname}}</td>
<td class=" ">{{$gen->gender}}</td>
<td class=" ">{{$gen->mobile}}</td>
<td class=" ">{{$gen->country}}</td>
<td class=" ">{{$gen->point}}</td>
<td class=" ">{{$gen->username}}</td>

<td class="a-right a-right ">{{$gen->status}}</td>
<td class=" last">
    <h4>
      <span class="label label-gen01">{{$gen->refid}}</span>
       <span class="label  label-gen02"> {{ $gen->gen02}}</span>
        <span class="label label-gen03"> {{ $gen->gen03}}</span>
         <span class="label label-gen04"> {{ $gen->gen04}}</span>
         <span class="label label-gen05"> {{ $gen->gen05}}</span>
       </h4></td>
</tr>
@empty
<p>No Records Found</p>
@endforelse
