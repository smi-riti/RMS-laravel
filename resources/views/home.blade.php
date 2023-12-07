<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="navbar-brand">Bootstrap</div>

        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-3">
                <form action="{{ route('store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                        @error('name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="">fname</label>
                        <input type="text" name="father"value="{{ old('father') }}" class="form-control">
                        @error('father')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="">Contact</label>
                        <input type="text" name="contact"value="{{ old('contact') }}" class="form-control">
                        @error('contact')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">School_name</label>
                        <input type="text" name="school_name"value="{{ old('school_name') }}" class="form-control">
                        @error('school_name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="">Maths</label>
                        <input type="text" name="math" value="{{ old('math') }}"class="form-control">
                        @error('math')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="">Science</label>
                        <input type="text" name="sci"value="{{ old('sci') }}" class="form-control">
                        @error('sci')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="">SST</label>
                        <input type="text" name="sst" value="{{ old('sst') }}"class="form-control">
                        @error('sst')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="">Hindi</label>
                        <input type="text" name="hindi" value="{{ old('hindi') }}"class="form-control">
                        @error('hindi')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="">Eng</label>
                        <input type="text" name="eng"value="{{ old('eng') }}" class="form-control">
                        @error('eng')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success w-100">
                    </div>

                </form>
            </div>
            <div class="col-9">
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Father</th>
                        <th>Contact</th>
                        <th>School</th>
                        <th>Maths</th>
                        <th>Sci</th>
                        <th>SST</th>
                        <th>Hindi</th>
                        <th>Eng</th>
                        <th>Action</th>
                    </tr>
                    @foreach($results as $pro)
                    <tr>
                        <td>{{$pro->id}}</td>
                        <td>{{$pro->name}}</td>
                        <td>{{$pro->father}}</td>
                        <td>{{$pro->contact}}</td>
                        <td>{{$pro->school_name}}</td>
                        <td>{{$pro->math}}</td>
                        <td>{{$pro->sci}}</td>
                        <td>{{$pro->sst}}</td>
                        <td>{{$pro->hindi}}</td>
                        <td>{{$pro->eng}}</td>
                        <td><a href="{{ route('delete',$pro->id) }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </table>
                
            </div>
        </div>
    </div>
</body>
</html>