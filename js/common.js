var global_page = 1;
var global_li_str = '';

$(document).ready(function(){

	 ShowItems(true);
	});
function ShowItems(show_el){
	var li_str='';
	$(".loader").show(); //Показываем прелоадер
	$("#show_more").attr('disabled',true);
	
	$.ajax({
        url: "list.php",
        type: "GET",
        data: {"page": global_page, "per_page": 4},
        //cache: false,
        success: function(response){
            
            if(response == 0){  // смотрим ответ от сервера и выполняем соответствующее действие
                 alert("Ошибка обработки запроса");
                 
            }
            else{

								
				 response = JSON.parse(response);
				if(response.entities.length == 0){
					$("#show_more").hide();
				}
								
				for(var i=0;i<response.entities.length;i++){
				
					li_str+='<li class="catalog-item">'+
                    '<div class="img-item">'+
                        '<img src="'+response.entities[i].img+'" alt="'+response.entities[i].title+'"/>';
                        
                        if(response.entities[i].discountCost != null)
							li_str+='<span class="item-sale"> Sale</span>';
                            
                        if (response.entities[i].new !=0)
                            li_str+='<span class="item-new">New</span>';
                        
                    li_str+= '</div>';
                   
                    li_str+= '<h3>'+response.entities[i].title+'</h3>';
                    li_str+=  '<p>'+ response.entities[i].description + '</p>';
                   
                    li_str+= (response.entities[i].discountCost ? "<span class='price-cost'>$" + response.entities[i].discountCost+"</span>" : "<span class='price-cost'>$" + response.entities[i].cost+"</span>"); 
                    
                    if (response.entities[i].discountCost != null)
                         li_str+=  '<span class="price-sale">$'+  response.entities[i].cost + ' </span>';

                    li_str+= '<div class="clearfix"></div>';

                    li_str+= '<button class="btn-item btn-add">Add to cart</button>';
                    li_str+= '<button class="btn-item btn-view">view</button>';

                  
                    li_str+='</li>';
				}


				if(global_li_str =='' && show_el){
						
					$(li_str).appendTo($(".catalog-list")).hide().show('slow');
					global_page++;
					ShowItems(false);
				}
                	else if(show_el){
									
						$(global_li_str).appendTo($(".catalog-list")).hide().show('slow');
						global_li_str = li_str;
						global_page++;
					}
                	else{
							
						global_li_str=li_str;
						global_page  ++;
					}
								
                 
                 
            }
				$(".loader").hide();
				$("#show_more").removeAttr('disabled');
        }

    });
}