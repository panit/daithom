@extends('layout.default')
@section('content')			   

<div class="col-md-12">

	<div class="form-row">			
		<div class="form-input">
			<div class="col-md-2">
				<select>
	                <option value="0">សាខា</option>
	                @foreach ($branches as $branch)

	                <option value="{{ $branch->branchID }}">{{ $branch->branchShortcut }}</option>
	                	
	                @endforeach 
	                             
	                
	            </select>
	        </div>
			<div class="col-md-1">
				<input type="text" placeholder="ID"  name="" id="">				
			</div>
			<div class="col-md-2">
				<select class="X-Small">
					<option value="0" selected="selected">លិទ្ធផលប្រលង</option>
					<option value="1" >ជាប់</option>
					<option value="2" >ធ្លាក់</option>
					<option value="3" >អវត្ថមាន</option>
				</select>
			</div>
			<div class="col-md-2">		
				<input type="text" placeholder="ទីកន្លែងប្រលង"  name="" id="">				
			</div>
			<div class="col-md-2">		
				<input type="text" placeholder="ថ្ងៃប្រលង" class="datepicker" id="datepicker2" name="datepicker2">				
			</div>
			<div class="col-md-1">		
				<input type="text" placeholder="លេខ"  name="" id="">				
			</div>
			<div class="col-md-2">		
				<a href="#" class="btn medium bg-black" title="">
		            <span class="button-content">បន្ថែមចូល</span>
		        </a>	
			</div>

			
		</div>
	</div>	

</div>

@if(Session::has('message'))

	<div class="col-md-4">
		<div class="infobox success-bg">
			{{ Session::get('message') }}
		</div>
	</div>

 @endif

<div class="col-md-12">
    <div class="col-md-8">

    <div class="example-code clearfix">

        <form action="#"  method="">

            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Khmer Name
                    </label>
                </div>
                <div class="form-input ">
                    <input placeholder="" class="col-md-4" type="text" name="" id="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        English Name
                    </label>
                </div>
                <div class="form-input ">
                    <input placeholder="." class="col-md-4" type="text" name="" id="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        Sex
                    </label>
                </div>
                <div class="form-input ">
                    <select class="col-md-2">
                    	<option value="Male">ប្រុស</option>
                    	<option value="Female">ស្រី</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        ថ្ងៃខែឆ្នាំកំនើត :
                    </label>
                </div>
                <div class="form-input ">
                    <input type="text" placeholder="ថ្ងៃខែឆ្នាំកំនើត" class="datepicker col-md-3" id="datepicker1" name="dateofbirth">
                   
                </div>
            </div>
            <div class="form-row">
                <div class="form-label col-md-2">
                    <label for="">
                        សញ្ជាតិ:
                    </label>
                </div>
                <div class="form-input ">
                    <select class="col-md-2">
                    	<option value="1">ខ្មែរ</option>
                    	<option value="2">បរទេស</option>
                    </select>
                </div>
            </div>

        </form>

    </div>
    </div>
    <div class="col-md-4">
        <div class="content-box pad5A">.col-md-4</div>
    </div>
</div>

							

@stop
