Bitspace360::Application.routes.draw do

root :to => "pages#index"

get "pages/index"
get "pages/donate"
get "pages/ethereum_meetup"
get "pages/blockparty"
get "pages/bip70"


 # get "inquiry/new"
 # post "inquiry/create"
 match '/inquiry/new', to: "inquiry#new", via: 'get', as: :new_inquiry
 match '/inquiry', to: "inquiry#create", via: 'post', as: :inquiries # path name is: myinquiry_path

# resources :inquiry, only: [:new, :create]

end
