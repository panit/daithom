@extends('layout.default')




    @section('content')

</br>
            <div class="col-md-3"> 

                   <div class="profile-box profile-box-alt content-box">
                    <div class="content-box-header clearfix bg-blue-alt">
                        <div class="user-details">
                    {{$student->englishName}}
                            <span>{{$student->phone}}</span>
                        </div>
                    </div>

                   

                    <div class="mrg15A">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="font-bold text-left">
                                        <div class="badge badge-small bg-azure"></div>
                                      ប្រាក់សរុប
                                    </td>
                                    <td class="text-center">
                                       {{$total}} $
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-bold text-left">
                                        <div class="badge badge-small bg-orange"></div>
                                        ប្រាក់កក់
                                    </td>
                                    <td class="text-center">
                                        {{$disposit}} $
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-bold text-left">
                                        <div class="badge badge-small bg-gray"></div>
                                        ប្រាក់នៅសល់
                                    </td>
                                    <td class="text-center">
                                       {{$remain}} $
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>    



                   

                         <div class="example-box">
                             <div class="example-code">

                                <table class="table table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th>Service</th>
                                            <th>Price</th>
                                            <th>Disposit</th>
                                            <th>Remain</th>
                                          
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                         <?php   $i=1; ?>
                                        @foreach ($services as $service)
                                     

                                      
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td class="font-bold text-left">{{ $service->service }}</td>
                                                <td class="font-bold text-left">{{ $service->price }} $</td>
                                                <td class="font-bold text-left">{{ $service->dispositAmount }} $</td>
                                                <td class="font-bold text-left">{{ $service->remainAmount }} $</td>
                                            
                                               
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:;" title="" class="btn medium bg-blue" data-toggle="dropdown">
                                                            <span class="button-content">
                                                                <i class="glyph-icon font-size-11 icon-cog"></i>
                                                                <i class="glyph-icon font-size-11 icon-chevron-down"></i>
                                                            </span>
                                                        </a>
                                                        <ul class="dropdown-menu float-right">

                                                            <li>
                                                                <a href="javascript:;" title="">
                                                                    <i class="glyph-icon icon-edit mrg5R"></i>
                                                                    Edit
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ URL::to('enrol/create/'.$student->student_id)}}" title="">
                                                                    <i class="glyph-icon icon-calendar mrg5R"></i>
                                                                    Add Service
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" title="">
                                                                    <i class="glyph-icon icon-download mrg5R"></i>
                                                                    Download
                                                                </a>
                                                            </li>
                                                            <li class="divider"></li>
                                                            <li>
                                                                <a href="javascript:;" class="font-red" title="">
                                                                    <i class="glyph-icon icon-remove mrg5R"></i>
                                                                    Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                          <?php $i++ ?> 
                                        @endforeach
                                       
                                   
                                    </tbody>
                                </table>

                             </div>
    
                        </div>



    @stop
