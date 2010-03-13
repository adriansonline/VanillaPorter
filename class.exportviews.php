<?php
/**
 * Views for Vanilla 2 export tools
 *
 * @copyright Vanilla Forums Inc. 2010
 * @license http://opensource.org/licenses/gpl-2.0.php GNU GPL2
 * @package VanillaPorter
 */
 
class ExportViews {
   
   /**
    *
    */
   public function PageHeader() {
      ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>Vanilla 2 forum export tool</title>
   <style>
   
   </style>
</head>
<body><?php

   }
   
   /**
    *
    */
   public function PageFooter() {
   
      ?>
</body>
</html><?php

   }
   
   /**
    *
    */
   public function NoPermission() {
      $this->PageHeader(); ?>
      
      
      
      <?php $this->PageFooter();
   }
   
   /**
    *
    */
   public function InfoForm($forums) {
      $this->PageHeader(); ?>
      
   <h1>Vanilla 2 forum export tool</h1>   
   <fieldset>
   <input type="hidden" name="step" value="info" />
   <ul>
      <li><label>Forum type</label>
         <select name="type">
         <?php foreach($forums as $forumClass => $forumInfo) : ?>
            <option value="<?php echo $forumClass; ?>"><?php echo $forumInfo['display']; ?></option>
         <?php endforeach; ?>
         </select>
      </li>
      <li><label>Database prefix</label><input type="text" name="prefix" value="<?php echo $forumInfo['prefix']; ?>" /> Leave blank if none.</li>
      <li><label>Database server</label><input type="text" name="dbserv" value="localhost" /> Usually &ldquo;localhost&rdquo; if you&rsquo;re not sure.</li>
      <li><label>Database name</label><input type="text" name="dbname" value="" /></li>
      <li><label>Database username</label><input type="text" name="dbuser" value="" /></li>
      <li><label>Database password</label><input type="password" name="dbpass" /></li>
   </ul>
   <input class="button" type="submit" value="Begin Export" />
   </fieldset>
   </form>
   
      <?php $this->PageFooter();
   }
   
   /**
    *
    */
   public function ExportResult() {
      $this->PageHeader(); ?>
      
      
      
      <?php $this->PageFooter();
   }
   
   
}