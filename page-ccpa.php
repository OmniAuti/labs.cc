<?php 
/* 
Template Name: CCPA Page
Template Post Type: page
*/ 

?>
<?php get_header(); ?>
      <!---->   
      <style>

        article{
            width: 100%;
            max-width: calc((1200px - 5vw) + 50px);
            margin: 0 auto;
            padding: 20px;
        }
        
        .ccpa__page-h1 {
            		font-family: "Roboto-Mono", monospace;

            font-size: 2rem;
            font-style: normal;
            font-weight: 800;
            line-height: 120%; /* 24px */
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-top: 50px;
            border-bottom: 2px solid #9d9fa2;
            padding-bottom: 35px;
            width: calc(100% - 50px);
            text-align:left;
            max-width: calc((1600px - 5vw) + 50px);
            margin: 50px auto;
            margin-bottom: 20px;
        }

        #ccpa__page h2 {
            		font-family: "Roboto-Mono", monospace;

            font-style: normal;
            font-weight: 700;
            font-size: 2rem;
            letter-spacing: 0px;
            line-height: 130%;
            margin: 25px 0px;
        }

        #ccpa__page p, #ccpa__page li {
            		font-family: "Roboto-Mono", monospace;

            font-style: normal;
            font-weight: 500;
            font-size: 1.4rem;
            letter-spacing: 0px;
            line-height: 180%;
        }

        #ccpa__page ul {
            margin-top: 20px;
            margin-bottom: 20px;
            padding-left: 50px;
            list-style-type: disc;
        }

        #ccpa__page a {
            color: #464547;
        }

        #ccpa__page table {
            width: 100%;
            text-indent: initial;
            border-spacing: 2px;
            border-collapse: collapse;
            font-size: 1.4rem;
            color: #464547;
            margin: 25px auto;
        }

        #ccpa__page tbody {
            display: table-row-group;
            vertical-align: middle;
            border-color: inherit;
        }

        #ccpa__page tr:nth-of-type(even) {
            background-color: #F9F9F9;
        }

        #ccpa__page td {
            line-height: 1.5
        }

        #ccpa__page tr td:first-child, #ccpa__page tr th:first-child {
         border-left: 1px solid #464547;
        }

        #ccpa__page tr td {
            border-top: 1px solid #464547;
            border-bottom: 1px solid #464547;
        }

        #ccpa__page tr td, #ccpa__page tr th {
            padding: 10px;
            border-right: 1px solid #464547;
        }

        @media (max-width: 750px) {
            .ccpa__page-h1 {
                width: calc(100% - 40px);
            }
        }

      </style>
      <!---->   
    <main class="main">
        <?php
		    the_content();
		?>
    </main>
      <!---->
    <!---->
<?php 
get_footer();