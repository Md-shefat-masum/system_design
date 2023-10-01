import setup from ".";
import kebabize from "../../../../../../utils/kebabize";
import All from "../All.vue";
import Create from "../Create.vue";
import Details from "../Details.vue";
import Edit from "../Edit.vue";
import Layout from "../Layout.vue";

let route_prefix = setup.route_prefix;
const routes =
{
    path: 'contact-message',
    component: Layout,
    children: [
        {
            path: '',
            name: route_prefix + "All",
            component: All,
        },
        {
            path: kebabize(route_prefix + "Create"),
            name: route_prefix + "Create",
            component: Create,
        },
        {
            path: kebabize(route_prefix + "Details") + '/:id',
            name: route_prefix + "Details",
            component: Details,
        },
        {
            path: kebabize(route_prefix + "Edit") + '/:id',
            name: route_prefix + "Edit",
            component: Edit,
        },
    ]
};


export default routes;
