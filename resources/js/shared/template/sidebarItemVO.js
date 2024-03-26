import {
  LayoutDashboardIcon,BorderAllIcon,
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
    to: '/vo/dashboard/show'
  },
  { header: 'Jaringan' },
  {
    title: 'Registrasi',
    icon: UserPlusIcon,
    BgColor: 'primary',
    to: '/vo/registrasi/show' 
  }

];

export default sidebarItem;
  