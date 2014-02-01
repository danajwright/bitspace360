class Inquiry < ActiveRecord::Base
  attr_accessible :name, :email, :phone, :mining, :co_working, :project_support, :details

  # validates_presence_of :name, :email, :phone, :on => :create, :message => "can't be blank"
end
