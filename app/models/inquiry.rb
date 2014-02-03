class Inquiry < ActiveRecord::Base
  attr_accessible :name, :email, :phone, :mining, :co_working, :project_support, :details

  validates :name, :email, :phone, :presence => true, :on => :create

end
