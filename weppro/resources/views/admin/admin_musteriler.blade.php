 @extends('admin.app')
   @section('icerik')

 <div class="container">
                           
                              <h4 >
                                 Müşteri Listesi
                              </h4>
                             
                          
                           
                              <table >
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Müşteri Adı</th>
                                       <th>Telefon</th>
                                       <th>Adres</th>
                                       <th>Mail</th>
                                       <th>Açıklama</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                     <?php foreach ($musteriler_liste as $row ) { ?>
                                     
                                     
                                    <tr>
                                       <th >{{$row->id}}</th>
                                       <th >{{$row->musteri_adi}}</th>
                                       <td>{{$row->musteri_tel}}</td>
                                       <td>{{$row->musteri_adres}}</td>
                                       <td>{{$row->musteri_mail}}</td>
                                       <td>{{$row->musteri_aciklama}}</td>

                                       
                                    </tr>
                                  <?php  } ?>
                                 </tbody>
                              </table>
                           
</div>
             @endsection('icerik')


             @section('css')
              <style type="text/css">
              	table, th, td {
               border: 1px solid #3f3d3d;
               border-collapse: collapse;
               

                 }
                 th, td {
               
               padding:15px;

                 } 

              </style>
             
             @endsection('css')

                @section('js')
                
             @endsection('js')