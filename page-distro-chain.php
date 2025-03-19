<?php
/* 
Template Name: Distro Chain
Template Post Type: page
*/ 
get_header();
?>
<style>
	main {
		display: grid;
		justify-content: center;
		padding: 100px 40px;
		/* height: calc(100vh - 100px); */
		min-height: 800px
	}
	table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}

</style>
	<main id="primary" class="site-main">
	<section class="distribution-chain">
		<table>
    <caption>Greens Goddess Products, Inc. Distribution Chain and points of intended sale</caption>
			<thead>
				<tr>
					<th scope="col">Dispensary</th>
					<th scope="col">License# </th>
				</tr>
			</thead>
			<?php 
			if( have_rows('dispensaries', 'option') ):
				while( have_rows('dispensaries', 'option') ): the_row();
				$dispo_name = get_sub_field('dispensary_name');
				$license_no = get_sub_field('license_number');
			?>
			<tr>
				<td data-label="Dispensary"><?= $dispo_name ?></td>
				<td data-label="License #"><?= $license_no ?></td>
			</tr>
			<?php 
				endwhile;
			endif;
			?>
		</table>
	</section>
	</main><!-- #main -->

<?php
get_footer();
