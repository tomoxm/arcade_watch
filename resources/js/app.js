//imports 
import './bootstrap';

//components
import FlashMessage from './components/FlashMessage.vue';
import Comment from './components/Comment.vue';


// vue me bejby
const app = new Vue({
   el: '#app' ,
   components: {
    FlashMessage,
    Comment
   }
});