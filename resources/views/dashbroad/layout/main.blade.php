<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TimingPoint | {{ $title }}</title>
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!-- Font Awesome CDN -->
     <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
     integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
     crossorigin="anonymous"
     referrerpolicy="no-referrer"
    />
    {{-- style css --}}
    <link rel="stylesheet" href="{{ asset('css/styledash.css')}}"/>
  </head>
  <body onload = "initClock()">
    <div class="container-1">
      @include('dashbroad.partial.sidebar')
      <div class="main-content">
        @include('dashbroad.partial.navbar')
      <div class="container-main-1">
            @yield('container')
      </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="{{ asset('js/harian.js') }}"></script>
    <script src="{{ asset('js/scriptdash.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   
    <script>
        // harian
    let dataRow = 0;
    $("#add-input").click(() => {
    dataRow++;
    inputRow(dataRow);
    });

    function changeColor(e) {
    var color = e.value;
    e.style.color = color;
    }

    inputRow = (i) => {
    let tr = `  <tr id="input-tr-${i}">
                        <td><div class="form-check form-switch ms-2">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>

                        <td><input type="text" class="form-control form-control-sm @error('mata_kuliah') is-invalid @enderror" name='mata_kuliah[]'></td>
                        @error('mata_kuliah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <td><input type="text" class="form-control form-control-sm @error('tugas') is-invalid @enderror" name='tugas[]'></td>
                        @error('tugas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <td><input type="date" class="form-control form-control-sm @error('tengat') is-invalid @enderror" name='tenggat[]'></td>
                        @error('tenggat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <td><input type="text" class="form-control form-control-sm @error('media') is-invalid @enderror" name='media[]'></td>
                        @error('media')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <td><select class="form-select @error('status') is-invalid @enderror"  id="status" onchange="changeColor(this)" name='status[]'>
                                <option >Belum selesai</option>
                                <option >Dalam proses</option>
                                <option >Selesai</option>
                                </select></td>
                                @error('status')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                        <td><button onclick="validasidelete" class="btn btn-sm btn-danger delete-record float-end" data-id="${i}">Hapus</button></td>

                    </tr>`;
    $("#data").append(tr);
    };

    $("#data").on("click", ".delete-record", function validasidelete() {
    let text = "Delete the assignment? ";
    if (confirm(text) == true) {
        let id = $(this).attr("data-id");
        $("#input-tr-" + id).remove();
    } else {
        text = "Delete canceled!";
    }
    document.getElementById("demo").innerHTML = text;
    });
    // end harian
    </script>
    @yield('script')

  </body>

</html>