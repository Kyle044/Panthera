@extends('layouts.app')

@section('content')
<div class="Dash">
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">

                <div class="logo_name">
                    Panthera
                </div>
            </div>
            <div class="bx bx-menu" id="btn"></div>
        </div>
        <ul class="nav_list">
            <li id="dashBtn"><a href="#">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltips">Users & Contact</span>
            </li>
            <li><a href="#" id="expertiseBtn">
                    <i class='bx bx-bulb'></i>
                    <span class="links_name">Expertise</span>
                </a>
                <span class="tooltips">Expertise Post</span>
            </li>
            <li id="projectBtn"><a href="#">
                    <i class='bx bxl-product-hunt'></i>
                    <span class="links_name">Projects</span>
                </a>
                <span class="tooltips">Project Post</span>
            </li>
            <!-- <li id="fileBtn"><a href="#">
                    <i class='bx bxs-file-archive'></i>
                    <span class="links_name">File Manager</span>
                </a>
                <span class="tooltips">Files</span>
            </li> -->
        </ul>
    </div>
    <!-- USER TABLE -->
    <div class="container" id="userTbl">
        <h5 class="reg">Registered User</h5>
        <table class="table table-striped table-bordered example " style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>



        <h5 class="reg">Contact Table</h5>
        <table class="table table-striped table-bordered example" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->message}}</td>
                    <td>{{$user->created_at}}</td>
                    <td><a href="" class="deleteBtn">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>




    </div>
    <!-- EXPERTISE TABLE -->
    <div class="container" id="expertiseTbl">
        <div class="header reg">
            <h5>Expertise</h5>
            <i class='bx bx-plus' style="font-size: 2rem; color:green" id="addExpertiseBtn"></i>
        </div>
        <table class="table table-striped table-bordered example" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Doctor Strange</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, eum?</td>
                    <td>2019</td>
                    <td><a href="" class="deleteBtn">Delete</a></td>
                </tr>

            </tbody>
        </table>
    </div>
    <!-- Projects TABLE -->
    <div class="container" id="projTbl">
        <div class="header reg">
            <h5>Projects</h5>
            <i class='bx bx-plus' style="font-size: 2rem; color:green" id="addProjectBtn"></i>
        </div>
        <table class="table table-striped table-bordered example" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Spiderman </td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, eum?</td>
                    <td>2019</td>
                    <td><a href="" class="deleteBtn">Delete</a></td>
                </tr>

            </tbody>
        </table>



    </div>


    <div class="modalContainer" id="modal">

        <form action="" class="expertiseForm" id="expertiseForm">
            <h5>Expertise Form</h5>
            <label for="">Title</label>
            <input type="text" name="" id="">
            <label for="">Description</label>
            <textarea id="" name="" rows="4" cols="50">
            </textarea>
            <label for="">Upload Picture</label>
            <input type="file" name="" id="">
            <div class="btnCont">
                <button type="submit">Submit</button>
                <button class="modalCancel">Cancel</button>
            </div>
        </form>

        <form action="" class="expertiseForm" id="projectForm">
            <h5>Project Form</h5>
            <label for="">Title</label>
            <input type="text" name="" id="">
            <label for="">Description</label>
            <textarea id="" name="" rows="4" cols="50">
                        </textarea>
            <label for="">Upload Picture</label>
            <input type="file" name="" id="">
            <div class="btnCont">
                <button type="submit">Submit</button>
                <button class="modalCancel">Cancel</button>
            </div>
        </form>

    </div>



</div>
<script>$(document).ready(function () {
        $('#modal').hide();
        $('#projTbl').hide();
        $('#expertiseTbl').hide();
        $('.example').DataTable();
        $('#projectForm').hide();
        $('#expertiseForm').hide();
        $('#btn').on('click', () => {
            $('.sidebar').toggleClass("active");
        });
        $('#dashBtn').on('click', () => {
            $('#modal').hide();
            $('#userTbl').show();
            $('#expertiseTbl').hide();
            $('#projTbl').hide();
        });
        $('#expertiseBtn').on('click', () => {
            $('#userTbl').hide();
            $('#expertiseTbl').show();
            $('#projTbl').hide();
            $('#modal').hide();
        });
        $('#projectBtn').on('click', () => {
            $('#projTbl').show();
            $('#userTbl').hide();
            $('#expertiseTbl').hide();
            $('#modal').hide();
        })
        $('#addExpertiseBtn').on('click', () => {
            $('#expertiseForm').show();
            $('#projectForm').hide();
            $('#modal').show();
        });
        $('#addProjectBtn').on('click', () => {
            $('#expertiseForm').hide();
            $('#projectForm').show();
            $('#modal').show();
        });
        $('.modalCancel').on('click', () => {
            $('#modal').hide();
            $('#expertiseForm').hide();
            $('#projectForm').hide();
        });

    });</script>
@endsection
</div>