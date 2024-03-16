@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">



    <div class="row w-100 mx-0 auth-page">
        <div class="col-md-8 col-xl-6 mx-auto">
            <div class="card">
                <div class="row">
                    <div class="col-md-2 pe-md-0">
                        <div class="auth-side-wrapper" style="background-image: url({{ url('') }})">
                            
                        </div>
                    </div>

                    <div class="col-md-8 ps-md-0">
                        <div class="auth-form-wrapper px-4 py-5">
                            <a href="#" class="noble-ui-logo d-block mb-2">HALAMAN UNTUK MONITORING HASIL JAWABAN <span>TES AKADEMIK PPDBM 2024</span></a>
                            <!-- <h5 class="text-muted fw-normal mb-4 mt-4">Silahkan klik tombol di bawah ini untuk mengakses aplikasi</h5> -->
                            @if (session('error'))
                            <div class="alert alert-danger">
                                <b>Opps!</b> {{ session('error') }}
                            </div>
                            @endif

                            <a href="//docs.google.com/spreadsheets/d/1l__RJLq3JJ4zl7DjwjpYxHsT6RaBfd7UfqTtR1MGl7w/edit?usp=sharing" target="_blank" class="btn btn-primary ml-4 mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 1</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1pQM48IKxCsXUzS8BBJN6Ws6OuhlGMiP3Fv-Yt5BDbzY/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 2</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/19e3Fu2KCHIY5tH7NRSgBcxzikEfnvRWOdha-QXJ3FZs/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 3</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1fhTt2OHnQvkF2jbgEp-lzx4xqpKKb6umVSR1nCrv4Cs/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 4</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1fhvahiXi55gweq9pmhNbnQ-Uq3DVqiDkRjByAKVUtKM/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 5</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1M8Ci9b3aaEAW5K1QC2TVvDDCIn2ZIG8W7pvAaYz2nYY/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 6</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1WqbF8-KUQTPrEP8zcSCAxUNoMM5HSSY69f8FWyCrO-8/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 7</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1qyuMpuiPt8xSMQ35N12Wpmj_luQh7x3RIcRFCkZoYR4/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 8</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1mHGyTsfYicW1IcwRyhG9WurZ6QalNFAXmbQDpElzZhI/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 9</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1jCazcuRNHUOTew6sKuRhFFvHhQqzFm-DnkVz0uM-a3U/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 10</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1WYsU3W1BYK9izgQLDI5sxkFvixxiA7wJVZ4taWwdWHU/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 11</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/12ed2BuE-ySZvp02kp52jgBtwtNA8mIwS-Rv822kD2qI/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 12</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1OWPQqTX1Stnw0jowVaQ6JzJbO2QhAzc91YT5MzxbAoQ/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 13</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1YaTUwuLc5coKrp9xfpEJ9LIHUuNU42cjoWDcsSorhso/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 14</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1Wjgob6EYapiIXd2x0JZJsy3yhb0roffibUPL5Tuedng/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 15</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1Gz4tl7U87dc-ZP1RuK5Y1zpsc3LPbqrDCtM3pr3i4y8/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 16</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1_2fiPPIUeHMTF-NcU6Kek0cQZSS8E_ceF4yB20ofv4c/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 17</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1yiVCOXcqyJR3iweQVDN-Pg80JaC9SP7PNuHSKd039uk/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 18</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1lp1fcZ0Yh3OhZ13hDcayBNjXJIWjvBEO6oZVTUbU3c4/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 19</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1QJruCSp1sCRR-3rcNyhu5QE6qrOKL4oSGuZVYLP8FSQ/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 20</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/12TDi9rxO-TvU-e3fIcKQh-IOmlpwp5Q5CkA5aXDG35k/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 21</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1tZK3lFi9yNA1vBG6wsy6gfMmymatRcbXsedNYX5roo8/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 22</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1xu12uKwJ8PT4sJFfxYG8WswW89Pxn8el5mESG_-kObw/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 23</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1mHI5-HQQ6Lq2mtuH2vVkK3SvbxAhGGXMZvntJUVOp-8/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 24</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1xnqKPg6CMUnSyl9wD9ovt-A0BIz2L_jzL9CLvS9dSA4/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 25</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/10ZVimCFMFf0Mp5szLO69jx32j9WQezfoXi4BgP7_vv4/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 26</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1D7xTi8lffy6LJRTktYMPdBsuxu5PpQSH_YKmKxcS_P4/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 27</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1E5cOZyS5xvrmLq5cR12cPugqBOiWgJUHC5PIm0hxTzE/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 28</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1dcSq1-2oPXbjxLjZLZmwzfi5_-v-8IhBmJuCBT10JbY/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 29</a>
                            <br>
                            <a href="//docs.google.com/spreadsheets/d/1QTpzR1jNd9H03yotmp5M-0P9Vn3IbweAnAL9LsbaWb8/edit?usp=sharing" target="_blank" class="btn btn-primary mt-4">KLIK DISINI UNTUK MENAMPILKAN HASIL JAWABAN RUANG 30</a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection