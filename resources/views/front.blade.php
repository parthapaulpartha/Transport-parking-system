@extends('layouts.master')

@section('content')
<div class="container text-center">
    <h2>
        TP-Map
    </h2>
    <div id="map">
    </div>
    <br>
        

         {{-- {!!Form::select('district', $districts,null,['id'=>'district']) !!} --}}
        <!--<select id="locationSelect" name="location" style="width: 150px">-->
        </select>
        <div id="city">
        </div>

        
        <br>
            <h4>
              
            </h4>
            
                
                </ul>
            </hr>
        </br>
    </br>
</div>
@endsection

 @section('js')
!--<script>
    $(document).ready(function(){
        $('#locationSelect').select2({
            placeholder:"Select and Search",
            ajax:{
                url:"/api/searchCity",
                type:"POST",
                dataType:"json",
                delay:250,
                data:function(params){
                    return{
                    locationVal:params.term,
                };
                },

                processResults:function(data){
                    return{
                        results:$.map(data.items,function(val,i){
                            return {id:i, text:val};
                        })
                    };
                }

            }


        });

        $('#locationSelect').on('select2:select',function(e){
                var val=$('#locationSelect').val();
        $.post('http://localhost/api/getLocationCoords',{val:val},function(match){

            var myLatLng = new google.maps.LatLng(match[0],match[1]);
            createMap(myLatLng);
            searchGirls(match[0],match[1]);
        });
        });
    });
</script>-->
@endsection 