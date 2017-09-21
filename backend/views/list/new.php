<?php
use yii\widgets\LinkPager;
$this->title = 'List Boat';
// $this->params['breadcrumbs'][] = $this->title;
$baseUrl = \Yii::getAlias('@web');
?>

<div class="ui grid">
  <div class="four wide column">
    <div class="ui vertical fluid tabular menu">
      <a href="index" class="item">
        Booking
      </a>
      <a class="item active">
        Boat
      </a>
    </div>
  </div>
  <div class="twelve wide stretched column">
    <div class="ui segment">


                 <div class="fresh-table toolbar-color-azure white">

                     <table id="fresh-table" class="table">
                         <thead>

                           <th data-field="id" data-sortable="true">ID</th>
                           <th data-field="name" data-sortable="true">Boat name</th>
                           <th data-field="salary" data-sortable="true">Type</th>
                           <th data-field="country" data-sortable="true">Maxseat</th>
                           <th data-field="price" data-sortable="true"><i class="home icon"></i>Price</th>
                           <th></th>
                           <th data-field="actions"  data-events="operateEvents" ></th>


                         </thead>
                         <tbody >
                               <?php foreach ($result as $data):
                                //  $teacher = Boat::findFirstByidTeacher($activity->Teacher_idTeacher);?>
                             <tr>
                               <td><?php echo $data->boat_id ?></td>
                               <td><b><?php echo $data->name ?></b></td>
                               <td><?php echo $data->type ?></td>
                               <td class="text-center"><?php echo $data->maxseat?></td>
                               <td class="text-center"><?php echo $data->price?></td>
                               <td></td>
                               <td></td>

                             </tr>
                             <?php endforeach; ?>
                         </tbody>
                     </table>
                 </div>


 </div>
</div>
</div>
