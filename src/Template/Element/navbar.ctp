
             <!---start-top-nav---->
             <div class="top-menu">
                 <div class="search">
                     <form>
                     <input type="text" placeholder="" required="">
                     <input type="submit" value=""/>
                     </form>
                 </div>
                  <span class="menu"> </span> 
                   <ul>
                        <li>
                        <?= $this->Html->link('INICIO', ['controller' => 'Pages', 'action' => '/'], ['class' => ($this->request->getParam['action'] == '/') ? 'active' : 'inactive']); ?>
                        </li>                       
                        <li>
                        <?= $this->Html->link('POSTS', ['controller' => 'Posts','action' => 'index'] , ['class' => ($this->request->getParam['action'] == 'index') ? 'active' : 'inactive']); ?>
                        	
                        </li> 
                        <li>
                        <?= $this->Html->link('NUEVO POST', ['controller' => 'Posts','action' => 'add'] , ['class' => ($this->request->getParam['action'] == 'add') ? 'active' : 'inactive']); ?>
                        	
                        </li>                      
                        <div class="clearfix"> </div>
                 </ul>
             </div>
             <div class="clearfix"></div>
                    <script>
                    $("span.menu").click(function(){
                    $(".top-menu ul").slideToggle("slow" , function(){
                    });
                    });
                    </script>
                <!---//End-top-nav---->                 
