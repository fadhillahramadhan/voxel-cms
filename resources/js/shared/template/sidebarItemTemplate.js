import {
  LayoutDashboardIcon,
  BorderAllIcon,
  AlertCircleIcon,
  CircleDotIcon,
  BoxMultiple1Icon,
  LoginIcon, MoodHappyIcon, ApertureIcon, UserPlusIcon
} from 'vue-tabler-icons';



const sidebarItem = [
  { header: 'Home' },
  {
    title: 'Dashboard',
    icon: LayoutDashboardIcon,
    BgColor: 'primary',
    to: '/template/dashboard'
  },
  { header: 'Ui components' },
  {
    title: "Alert",
    icon: AlertCircleIcon,
    BgColor: 'primary',
    to: "/template/alert",
    
  },
  {
    title: "Button",
    icon: CircleDotIcon,
    BgColor: 'primary',
    to: "/template/button",
  },
  {
    title: "Cards",
    icon: BoxMultiple1Icon,
    BgColor: 'primary',
    to: "/template/card",
  },
  {
    title: "Tables",
    icon: BorderAllIcon,
    BgColor: 'primary',
    to: "/template/table",
  },

 
{ header: 'Extra' },
{
    title: 'Icons',
    icon: MoodHappyIcon,
    BgColor: 'primary',
    to: '/template/icons'
},
// {
//     title: 'Sample Page',
//     icon: ApertureIcon,
//     BgColor: 'primary',
//     to: '/sample-page'
// },

];

export default sidebarItem;
