   @extends('admin.app')
   @section('icerik')

 <div class="container">
                           
                              <h4 >
                                 Firma Listesi
                              </h4>
                             
                          
                           
                              <table >
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Firma Adı</th>
                                       <th>Telefon</th>
                                       <th>Adres</th>
                                       <th>Mail</th>
                                       <th>Açıklama</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                     <?php foreach ($firmalar_liste as $row ) { ?>
                                     
                                     
                                    <tr>
                                       <th >{{$row->firma_id}}</th>
                                       <th >{{$row->firma_adi}}</th>
                                       <td>{{$row->firma_tel}}</td>
                                       <td>{{$row->firma_adres}}</td>
                                       <td>{{$row->firma_mail}}</td>
                                       <td>{{$row->firma_aciklama}}</td>

                                       
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