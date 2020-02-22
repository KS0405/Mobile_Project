import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  { path: '', redirectTo: 'home', pathMatch: 'full' },
  { path: 'home', loadChildren: () => import('./home/home.module').then( m => m.HomePageModule)},
  {
    path: 'register',
    loadChildren: () => import('./register/register.module').then( m => m.RegisterPageModule)
  },
  {
    path: 'history',
    loadChildren: () => import('./history/history.module').then( m => m.HistoryPageModule)
  },
  {
    path: 'list',
    loadChildren: () => import('./list/list.module').then( m => m.ListPageModule)
  },
  {
    path: 'calculate',
    loadChildren: () => import('./calculate/calculate.module').then( m => m.CalculatePageModule)
  }
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
