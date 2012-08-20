<?php

App::uses('AppHelper', 'View/Helper');

class HumanizedTagsHelper extends AppHelper {
    public function speak($tags, $options) {
    	$tagString = '';
    	$counter = 1;
    	$listLength = count($tags);
    	
    	foreach($tags as $tag){
    		
    		if($options['key'] && $options['key'] != ''){
    			$tag = $tag[$options['key']];
    		}
    		
    		if($options['forceCaps'] == true){
    			$tag = ucwords($tag);
    		}
    		
    		if($listLength == 1){
    			$tagString .= $tag;
    		}elseif($counter == ($listLength - 1)){
    			$tagString .= $tag;
    		}elseif($counter < $listLength){
    			$tagString .= $tag . ', ';
    		}else{
    			$tagString .= ' and ' . $tag;
    		}
    		
    		$counter++;
    	}
    	
        return $tagString;
    }
}

?>