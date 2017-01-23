<?php cpm_get_header( __( 'To-do Lists', 'cpm' ), $project_id );  ?>

<div class='cpm-task-container wrap'  id='cpm-task-el' v-cloak>

    <!-- New Todo list button -->
    <a @click.prevent="showHideTodoListForm(list, index)" href="#" class="cpm-btn cpm-btn-blue cpm-margin-bottom add-tasklist">
        <i v-if="!show_list_form" class="fa fa-plus-circle" aria-hidden="true"></i>
        <i v-if="show_list_form" class="fa fa-minus-circle" aria-hidden="true"></i>
        {{text.new_todo}}
    </a>

    <!-- Spinner before load task -->
    <div v-if="loading" class="cpm-data-load-before" >
        <div class="loadmoreanimation">
            <div class="load-spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
    </div>

    <!-- New Todo list form -->
    <todo-list-form :list="list" :index="index" v-show="show_list_form"></todo-list-form>
    
    <!-- Show Task list and his child -->
    <todo-list></todo-list>
        
   


<!--     <blanktemplate
        :emptylist="emptylist"
        :new_list_form.sync="new_list_form">
            
    </blanktemplate>

     <div class="loadmoreanimation">
        <div class="load-spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>

    <div v-if="showMoreBtn && !listfullview">
            <a class="cpm-btn cpm-btn-blue cpm-btn-secondary" href="JavaScript:void(0)"  @click.prevent="loadmorelist()" >Load More ... </a>
    </div>

    <single-task :project_id="current_project" :tasklist="tasklist"></single-task> 
 -->


</div>
