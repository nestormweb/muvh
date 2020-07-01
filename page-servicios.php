<!--Template creado por: Néstor Morel-->
<?php get_header(); ?>
<style>
a {
    /* color: #400000; */
    color: #874343;
}

h2{
   font-size: 18px;
   font-weight: normal;
   font-family: 'open_sanssemibold', Helvetica, Arial, sans-serif;
   padding-bottom: 10px;
   margin-bottom: 20px;
  /* text-transform: uppercase;*/
   color: #874343;
   border-bottom: solid 1px #ccc;


}
</style>

<center><h2>Datos Abiertos prueba</h2></center>
                      <?php 
echo do_shortcode("[wpdatatable id=2]");
?>

<?php get_footer(); ?>       

