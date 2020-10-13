<?php include'posts.php';?>
       <?php for ($i=1; $i<=3; $i++) {echo $posts[$i]['post_content'];}?>
       <nav aria-label="Page navigation example">
           <ul class="pagination justify-content-center">
               <li class="page-item disabled">
                   <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
               </li>
               <li class="page-item active"><a class="page-link" href="#">1</a></li>
               <li class="page-item"><a class="page-link" href="#">2</a></li>
               <li class="page-item"><a class="page-link" href="#">3</a></li>
               <li class="page-item">
                   <a class="page-link" href="#">Next</a>
               </li>
           </ul>
       </nav>

